<?php namespace Bstrahija\Assets;

use Assetic\Asset\FileAsset;

class Asset {

	/**
	 * Illuminate application instance.
	 * @var Illuminate\Foundation\Application  $app
	 */
	protected $app;

	/**
	 * Name of the asset
	 * @var string
	 */
	public $name;

	/**
	 * Assets type for this file
	 * @var string
	 */
	public $type;

	/**
	 * File path
	 * @var string
	 */
	public $path;

	/**
	 * File URL
	 * @var string
	 */
	public $url;

	/**
	 * Basename of file
	 * @var string
	 */
	public $fileName;

	/**
	 * File extension
	 * @var string
	 */
	public $extension;

	/**
	 * Contents of the asset file
	 * @var string
	 */
	public $contents;

	/**
	 * Create new Asset instance
	 *
	 * @param string $asset
	 * @param Illuminate\Foundation\Application $app
	 */
	public function __construct($type, $name, $group, $app)
	{
		// Assign parameters
		$this->type  = $type;
		$this->name  = $name;
		$this->app   = $app;
		$this->group = $group;

		// Read file info
		$this->fileInfo();
	}

	/**
	 * Reads basic file info
	 *
	 * @return void
	 */
	public function fileInfo()
	{
		// URL to asset file
		$this->url  = $this->app['assets::config']['base_url'] . $this->name;

		// Get advanced info for compiling
		if ($this->group->compile)
		{
			$this->fileAdvancedInfo();
		}
	}

	/**
	 * Advanced info, only needed when compiling files
	 *
	 * @return void
	 */
	public function fileAdvancedInfo()
	{
		$this->path = realpath($this->app['path.public']) . '/' . $this->name;

		if ($this->app['files']->exists($this->path))
		{
			$this->fileName  = basename($this->path);
			$this->extension = $this->app['files']->extension($this->path);
			$this->modified  = (int) @filemtime($this->path);
			$this->dirty     = false;

			// Check for import statements
			$this->contents = $this->contents();

			// Test
			$importsExist = preg_match_all("/@import\s+(.*);/", $this->contents, $imports);

			if ($importsExist > 0)
			{
				$assetDir = pathinfo($this->name, PATHINFO_DIRNAME);

				foreach ($imports[1] as $import)
				{
					$importPath     = realpath($this->app['path.public']) . '/' . $assetDir . '/' . str_replace("\"", "", $import);
					$importModified = (int) @filemtime($importPath);

					if ($importModified > $this->modified) $this->modified = $importModified;
				}
			}

			// Update group modified time
			if ($this->modified > $this->group->modified)
			{
				$this->group->setModified($this->modified);
			}
		}
	}

	/**
	 * Reads and returns the contents of the asset file
	 *
	 * @return string
	 */
	public function contents()
	{
		if ($this->path)
		{
			$this->contents = $this->app['files']->getRemote($this->path);

			return $this->contents;
		}
	}

}