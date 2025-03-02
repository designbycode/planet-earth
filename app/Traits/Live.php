<?php

namespace App\Traits;
use Illuminate\Database\Eloquent\Builder;

trait Live
{
    /**
     * @param \Illuminate\Database\Eloquent\Builder $builder
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLive(Builder $builder): Builder
    {
        return $builder->where('live', true);
    }
}
