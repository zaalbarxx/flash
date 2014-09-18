<?php namespace Zaalbarxx\Flash;

use Illuminate\Support\ServiceProvider;

class FlashServiceProvider extends ServiceProvider {

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
		$this->package('zaalbarxx/flash');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app->bind('Zaalbarxx\Flash\SessionStore', 'Zaalbarxx\Flash\LaravelSessionStore');

		$this->app->bindShared('flashmessage', function(){
                return $this->app->make('Zaalbarxx\Flash\FlashNotifier');
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('flashmessage');
	}

}
