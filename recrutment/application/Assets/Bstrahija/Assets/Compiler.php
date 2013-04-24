<?php namespace Bstrahija\Assets;

use Assetic\Asset\AssetCache;
use Assetic\Asset\AssetCollection;
use Assetic\Asset\FileAsset;
use Assetic\Cache\FilesystemCache;
use Assetic\Filter\LessphpFilter;
use Assetic\Filter\CssMinFilter;

class CompileFailedException extends \Exception {}

class Compiler {

	/**
	 * Illuminate application instance.
	 *
	 * @var Illuminate\Foundation\Application  $app
	 */
	protected $app;

	/**
	 * The group
	 *
	 * @var string
	 */
	public $group;

	/**
	 * Compiled contents
	 *
	 * @var string
	 */
	public $contents;

	/**
	 * Create new compiler instance
	 *
	 * @param Bstrahija\Assets\Grop              $group
	 * @param Illuminate\Foundation\Application  $app
	 */
	public function __construct($group, $app)
	{
		// Set params
		$this->group = $group;
		$this->app   = $app;
	}

	/**
	 * Compiles a given group
	 * @return void
	 */
	public function run()
	{
		// Assets
		$assets = array();

		foreach ($this->group->assets as $asset)
		{
			$assets[] = new FileAsset($asset->path);
		}

		// Filters
		$filters = array();

		foreach ($this->group->filters as $filter)
		{
			$filterClass = 'Assetic\Filter\\' . $filter;
			if ($filter == 'LessFilter') $filters[] = new $filterClass('/usr/local/bin/node');
			else                         $filters[] = new $filterClass;
		}

		// Create the collection in Assetic
		try
		{
			$group = new AssetCollection($assets, $filters);

			// And write contents
			$this->app['files']->put($this->group->cacheFilePath, $group->dump());
		}
		catch (\Exception $e)
		{
			$this->app['files']->put($this->group->cacheFilePath, $this->group->contents());
		}
	}

}