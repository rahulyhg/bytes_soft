<?php

namespace Botble\Slider\Models;

use Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Botble\Slider\Models\Slider
 *
 * @mixin \Eloquent
 */
class Slider extends Eloquent
{
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sliders';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'image',
        'title',
        'description',
        'status',
    ];
}
