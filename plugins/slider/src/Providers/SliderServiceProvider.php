<?php

namespace Botble\Slider\Providers;

use Botble\Slider\Models\Slider;
use Illuminate\Support\ServiceProvider;
use Botble\Slider\Repositories\Caches\SliderCacheDecorator;
use Botble\Slider\Repositories\Eloquent\SliderRepository;
use Botble\Slider\Repositories\Interfaces\SliderInterface;
use Botble\Support\Services\Cache\Cache;
use Botble\Base\Supports\Helper;
use Botble\Base\Events\SessionStarted;
use Event;
use Botble\Base\Traits\LoadAndPublishDataTrait;

class SliderServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    /**
     * @var \Illuminate\Foundation\Application
     */
    protected $app;

    /**
     * @author Sang Nguyen
     */
    public function register()
    {
        if (setting('enable_cache', false)) {
            $this->app->singleton(SliderInterface::class, function () {
                return new SliderCacheDecorator(new SliderRepository(new Slider()), new Cache($this->app['cache'], SliderRepository::class));
            });
        } else {
            $this->app->singleton(SliderInterface::class, function () {
                return new SliderRepository(new Slider());
            });
        }

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    /**
     * @author Sang Nguyen
     */
    public function boot()
    {
        $this->setIsInConsole($this->app->runningInConsole())
            ->setNamespace('plugins/slider')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishViews()
            ->loadAndPublishTranslations()
            ->loadRoutes();

        Event::listen(SessionStarted::class, function () {
            dashboard_menu()->registerItem([
                'id' => 'cms-plugins-slider',
                'priority' => 5,
                'parent_id' => null,
                'name' => 'Slider Seting',
                'icon' => 'fa fa-list',
                'url' => route('slider.list'),
                'permissions' => ['slider.list'],
            ]);
        });
    }
}
