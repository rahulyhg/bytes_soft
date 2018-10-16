<?php

namespace Botble\Slider\Repositories\Caches;

use Botble\Support\Repositories\Caches\CacheAbstractDecorator;
use Botble\Support\Services\Cache\CacheInterface;
use Botble\Slider\Repositories\Interfaces\SliderInterface;

class SliderCacheDecorator extends CacheAbstractDecorator implements SliderInterface
{
    /**
     * @var SliderInterface
     */
    protected $repository;

    /**
     * @var CacheInterface
     */
    protected $cache;

    /**
     * SliderCacheDecorator constructor.
     * @param SliderInterface $repository
     * @param CacheInterface $cache
     * @author Sang Nguyen
     */
    public function __construct(SliderInterface $repository, CacheInterface $cache)
    {
        $this->repository = $repository;
        $this->cache = $cache;
    }
}
