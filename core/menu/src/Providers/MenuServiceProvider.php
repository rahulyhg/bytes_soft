<?php

namespace Botble\Menu\Providers;

use Botble\Base\Supports\Helper;
use Botble\Base\Traits\LoadAndPublishDataTrait;
use Botble\Menu\Facades\MenuFacade;
use Botble\Menu\Models\Menu as MenuModel;
use Botble\Menu\Models\MenuNode;
use Botble\Menu\Repositories\Caches\MenuCacheDecorator;
use Botble\Menu\Repositories\Caches\MenuNodeCacheDecorator;
use Botble\Menu\Repositories\Eloquent\MenuNodeRepository;
use Botble\Menu\Repositories\Eloquent\MenuRepository;
use Botble\Menu\Repositories\Interfaces\MenuInterface;
use Botble\Menu\Repositories\Interfaces\MenuNodeInterface;
use Botble\Support\Services\Cache\Cache;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    /**
     * @var \Illuminate\Foundation\Application
     */
    protected $app;

    /**
     * Register the service provider.
     *
     * @return void
     * @author Sang Nguyen
     */
    public function register()
    {
        if (setting('enable_cache', false)) {
            $this->app->singleton(MenuInterface::class, function () {
                return new MenuCacheDecorator(new MenuRepository(new MenuModel()), new Cache($this->app['cache'], MenuRepository::class));
            });

            $this->app->singleton(MenuNodeInterface::class, function () {
                return new MenuNodeCacheDecorator(new MenuNodeRepository(new MenuNode()), new Cache($this->app['cache'], MenuNodeRepository::class));
            });
        } else {
            $this->app->singleton(MenuInterface::class, function () {
                return new MenuRepository(new MenuModel());
            });

            $this->app->singleton(MenuNodeInterface::class, function () {
                return new MenuNodeRepository(new MenuNode());
            });
        }

        AliasLoader::getInstance()->alias('Menu', MenuFacade::class);

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    /**
     * Boot the service provider.
     * @author Sang Nguyen
     */
    public function boot()
    {
        $this->setIsInConsole($this->app->runningInConsole())
            ->setNamespace('core/menu')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadRoutes()
            ->loadAndPublishViews()
            ->loadAndPublishTranslations()
            ->loadMigrations()
            ->publishAssetsFolder()
            ->publishPublicFolder();
    }
}
