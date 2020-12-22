<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['url'];

    public function series()
    {
        return $this->belongsTo(Series::class);
    }

    public function getUrlAttribute()
    {
        return route('series.episode', [$this->series, $this->episode_number]);
    }
}
