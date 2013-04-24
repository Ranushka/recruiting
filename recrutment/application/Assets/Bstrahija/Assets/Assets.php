<?php namespace Bstrahija\Assets;

class Assets {

	/**
	 * Name of the current group we're working with
	 * @var string
	 */
	public $name;

	/**
	 * Illuminate application instance.
	 * @var Illuminate\Foundation\Application
	 */
	protected $app;

	/**
	 * All assets groups.
	 * @var array
	 */
	protected $groups = array();

	/**
	 * Assets configuration
	 * @var array
	 */
	protected $cfg;

	/**
	 * Create new Assets instance
	 *
	 * @param  Illuminate\Foundation\Application  $app
	 * @return void
	 */
	public function __construct($app)
	{
		$this->app = $app;

		// Fetch configuration
		$this->configure();
	}

	/**
	 * Add new CSS group
	 *
	 * @param  string $name
	 * @param  array  $assets
	 * @return void
	 */
	public function css($name, $assets = array())
	{
		// Default group
		if (is_array($name))
		{
			$assets = $name;
			$name   = 'default';
		}

		return $this->group('css', $name, $assets);
	}

	/**
	 * Add new JS group
	 *
	 * @param  string $name
	 * @param  array  $assets
	 * @return $this
	 */
	public function js($name, $assets = array())
	{
		// Default group
		if (is_array($name))
		{
			$assets = $name;
			$name   = 'default';
		}

		return $this->group('js', $name, $assets);
	}

	/**
	 * Add new assets group
	 *
	 * @param  string $type
	 * @param  string $name
	 * @param  array  $assets
	 * @return void
	 */
	public function group($type = 'css', $name, $assets = array())
	{
		$typeName   = $name . '.' . $type;
		$this->name = $typeName;

		// Add new assets group if it doesn't exist or just add additional assets
		if ( ! isset($this->groups[$typeName]))
		{
			$this->groups[$typeName] = new Group($type, $typeName, $this->app, $assets, $this->cfg);

			// Add compile option to group
			$this->groups[$typeName]->compile = (bool) $this->app['config']->get('assets::compile');
		}
		else
		{
			$this->groups[$typeName]->add($assets);
		}

		return $this->groups[$typeName];
	}

	/**
	 * Get config option
	 *
	 * @param  array $config
	 * @return void
	 */
	public function config($config = null)
	{

	}

	/**
	 * Set configuration params
	 *
	 * @param  array $cfg
	 */
	public function configure($cfg = null)
	{
		if ( ! $cfg and ! $this->cfg)
		{
			$this->cfg = array(
				'compile'         => $this->app['config']->get('assets::compile'),
				'cache_path'      => $this->app['config']->get('assets::cache_path'),
				'cache_info_file' => $this->app['config']->get('assets::cache_info_file'),
				'freeze'          => $this->app['config']->get('assets::freeze'),
				'base_url'        => $this->app['url']->asset('/'),
				'cache_url'       => $this->app['url']->asset($this->app['config']->get('assets::cache_path')) . '/',
			);
		}
		elseif ($cfg)
		{
			$this->cfg = array_merge($this->cfg, $cfg);
		}

		// Add to app
		$this->app['assets::config'] = $this->cfg;
	}

	/**
	 * Clear all cache, or only the cache for a group
	 *
	 * @param  string $group
	 * @return void
	 */
	public function clearCache($group = null)
	{
		// Get list of cached files
		$path  = realpath(public_path() . '/' . $this->app['assets::config']['cache_path']);
		$files = $this->app['files']->files($path);

		if ($files)
		{
			foreach ($files as $file)
			{
				$this->app['files']->delete($file);
			}
		}
	}

	/**
	 * Returns data for cachefie
	 * @return array
	 */
	public function generateCacheInfo()
	{
		$info = array();

		foreach ($this->groups as $group)
		{
			$info[$group->name] = array(
				'type'          => $group->type,
				'modified'      => $group->modified,
				'modifiedHuman' => date('Y-m-d H:i:s', $group->modified),
				'cacheFileUrl'  => $group->cacheFileUrl,
				'cacheFilePath' => $group->cacheFilePath,
				'assets'        => array(),
			);

			foreach ($group->assets as $asset)
			{
				$info[$group->name]['assets'][$asset->name] = array(
					'modified'      => $asset->modified,
					'modifiedHuman' => date('Y-m-d H:i:s', $asset->modified),
				);
			}
		}

		return $info;
	}

	/**
	 * Writes cache info file
	 * @return void
	 */
	public function writeCacheInfo()
	{
		$info = $this->generateCacheInfo();
		$file = realpath(public_path() . '/' . $this->app['assets::config']['cache_path']) . '/' . $this->app['assets::config']['cache_info_file'];
		$this->app['files']->put($file, json_encode($info));
	}

	/**
	 * Returns cache info from file or generaotr
	 * @return array
	 */
	public function cacheInfo()
	{
		$file = realpath(public_path() . '/' . $this->app['assets::config']['cache_path']) . '/' . $this->app['assets::config']['cache_info_file'];
		$info = (array) json_decode($this->app['files']->get($file));

		return $info;
	}

}
