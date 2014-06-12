<?php namespace Cornernote\Themer;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Config;

class ThemerServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		// add the package
		$this->package('cornernote/themer');

		// set up the theme alias here
		AliasLoader::getInstance()->alias('Theme', 'Cornernote\Themer\Theme');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// add the  public/themes path to the view path
		$viewPaths = Config::get('view.paths');
		$viewPaths[] = public_path() . '/themes/';
		Config::set('view.paths', $viewPaths);
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
