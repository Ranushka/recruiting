<?php namespace Bstrahija\Assets;

use Illuminate\Support\ServiceProvider;

class AssetsServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('bstrahija/assets');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// Register the package configuration with the loader.
		$this->app['config']->package('bstrahija/assets', __DIR__.'/../../config');

		// Register bindings and commands
		$this->registerBindings();
		$this->registerCommands();

		// Shortcut so developers don't need to add an Alias in app/config/app.php
		$this->app->booting(function()
		{
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('Assets', 'Bstrahija\Assets\Facades\Assets');
		});
	}

	/**
	 * Register package bindings
	 *
	 * @return void
	 */
	public function registerBindings()
	{
		$this->app['assets'] = $this->app->share(function($app)
		{
			return new Assets($app);
		});

		$this->app['assets.profiler'] = $this->app->share(function($app)
		{
			return new Profiler($app['files'], $app['assets'], '');
		});
	}

	/**
	 * Register some artisan commands
	 *
	 * @return void
	 */
	public function registerCommands()
	{
		/*$this->app['command.assets'] = $this->app->share(function($app)
		{
			return new Commands\AssetsCommand;
		});

		$this->app['command.assets.compile'] = $this->app->share(function($app)
		{
			return new Commands\CompileCommand($app['assets'], $app['assets.compiler']);
		});

		$this->commands('command.assets', 'command.assets.cache');*/
	}

}