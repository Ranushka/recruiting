<?php namespace Bstrahija\Assets;

class Responder {

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
	 * Create a new assets responder instance
	 *
	 * @param Bstrahija\Assets\Grop              $group
	 * @param Illuminate\Foundation\Application  $app
	 */
	public function __construct($group, $app)
	{
		// Assign params
		$this->group = $group;
		$this->app   = $app;

		// Compile if needed
		$this->group->compile();
	}

	/**
	 * Create single HTML tag
	 * @param  string $url
	 * @return string
	 */
	public function tag($url)
	{
		if ($this->group->type == 'css')
		{
			return '<link rel="stylesheet" href="' . $url . '">' . PHP_EOL;
		}
		elseif ($this->group->type == 'js')
		{
			return '<script src="' . $url . '"></script>' . PHP_EOL;
		}
	}

	/**
	 * Generates a HTML tag
	 * @return string
	 */
	public function tags()
	{
		$tags = '';

		if ($this->group->compile)
		{
			$tags = $this->tag($this->group->cacheFileUrl);
		}
		else
		{
			foreach ($this->group->assets as $asset)
			{
				$tags .= $this->tag($asset->url);
			}
		}

		return $tags;
	}

	/**
	 * Display HTML tags for assets group
	 *
	 * @return string
	 */
	public function show()
	{
		echo $this->tags();
	}

}