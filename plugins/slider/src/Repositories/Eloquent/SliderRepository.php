<?php

namespace Botble\Slider\Repositories\Eloquent;

use Botble\Support\Repositories\Eloquent\RepositoriesAbstract;
use Botble\Slider\Repositories\Interfaces\SliderInterface;

class SliderRepository extends RepositoriesAbstract implements SliderInterface
{
    /**
     * @var string
     */
    protected $screen = SLIDER_MODULE_SCREEN_NAME;
}
