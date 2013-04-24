<?php namespace Bstrahija\Assets;

class Group {

	/**
	 * Illuminate application instance.
	 *
	 * @var Illuminate\Foundation\Application  $app
	 */
	protected $app;

	/**
	 * Name of the assets group
	 *
	 * @var string
	 */
	public $name;

	/**
	 * Assets type for this group
	 *
	 * @var string
	 */
	public $type;

	/**
	 * Container for all assets and required options
	 *
	 * @var array
	 */
	public $assets = array();

	/**
	 * Contents of the combined group
	 * @var string
	 */
	protected $contents;

	/**
	 * Time when any files in the group have been modified
	 * @var int
	 */
	public $modified = 0;

	/**
	 * Do we compile the assets in this group
	 * By default this is not set
	 * @var boolean
	 */
	public $compile;

	/**
	 * Name of group cache file
	 * @var string
	 */
	public $cacheFile;

	/**
	 * Path for cache file
	 * @var string
	 */
	public $cacheFilePath;

	/**
	 * URL to cached file
	 * @var string
	 */
	public $cacheFileUrl;

	/**
	 * Assets group configuration
	 * @var array
	 */
	protected $cfg;

	/**
	 * Filters that should be applied to the group
	 * @var array
	 */
	public $filters = array();

	/**
	 * Create new assets group instance
	 *
	 * @param string $type
	 * @param string $name
	 * @param array $assets
	 * @param Illuminate\Foundation\Application $app
	 */
	public function __construct($type, $name, $app, $assets = null, $cfg = null)
	{
		// Assign parameters
		$this->type = $type;
		$this->name = $name;
		$this->app  = $app;
		$this->cfg  = $cfg;

		// Compile option
		if (isset($this->cfg['compile'])) $this->compile = (bool) $this->cfg['compile'];

		// Add the assets
		if ($assets) $this->addMany($assets);
	}

	/**
	 * Add an asset file
	 *
	 * @param string $name
	 */
	public function add($name)
	{
		if ( ! isset($this->assets[$name]))
		{
			$this->assets[$name] = new Asset($this->type, $name, $this, $this->app);
		}
	}

	/**
	 * Add many assets
	 *
	 * @param array $assets
	 */
	public function addMany($assets)
	{
		foreach ($assets as $asset)
		{
			$this->add($asset);
		}

		// And setup the caching/compiling
		$this->cacheSetup();
	}

	/**
	 * Generates a nice cache file name for the group
	 *
	 * @return string
	 */
	public function cacheSetup()
	{
		// Generate the name
		$time      = $this->modified;
		$extension = $this->type;
		$fileName  = pathinfo($this->name, PATHINFO_FILENAME) . "." . md5($this->name . '.' . $time);
		$name      = $fileName . "." . $extension;

		// Generate the cache file path
		$this->cacheFilePath = realpath(public_path() . '/' . $this->app['assets::config']['cache_path']) . '/' . $name;

		// Generate the cache file URL
		$this->cacheFileUrl = $this->app['assets::config']['cache_url'] . $name;

		return $this->cacheFile = $name;
	}

	/**
	 * Check if the group is dirty (needs recompiling)
	 * @return bool
	 */
	public function dirty()
	{
		if ( ! $this->app['files']->exists($this->cacheFilePath))
		{
			return true;
		}

		return false;
	}

	/**
	 * Set the modified time for the asset group
	 *
	 * @param int $time
	 */
	public function setModified($time)
	{
		$this->modified = $time;

		// Set new cache name
		$this->cacheSetup();
	}

	/**
	 * Try to compile the group
	 *
	 * @return mixed
	 */
	public function compile()
	{
		if ($this->dirty() and $this->compile)
		{
			$compiler       = new Compiler($this, $this->app);
			$this->contents = $compiler->run();
		}
	}

	/**
	 * Disable compiling for this group
	 * @return void
	 */
	public function dontCompile()
	{
		$this->compile = false;

		return $this;
	}

	/**
	 * Simply return entire contents
	 *
	 * @return string
	 */
	public function contents()
	{
		return $this->contents;
	}

	/**
	 * Add filters to list
	 *
	 * @return void
	 */
	public function filters($filters)
	{
		if ($filters)
		{
			if (is_string($filters)) $filters = array($filters);
			if (is_array($filters))  $this->filters = array_merge($this->filters, $filters);
		}

		return $this;
	}

	/**
	 * Display all assets group HTML tags
	 *
	 * @return string
	 */
	public function show($group = null)
	{
		$responder = new Responder($this, $this->app);

		return $responder->show();
	}

}