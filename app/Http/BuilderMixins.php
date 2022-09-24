<?php

namespace App\Http;

use Closure;
use Illuminate\Database\Eloquent\Builder;

class BuilderMixins
{
    public function last(): Closure
    {
        return function (){
            /** @var Builder $this */
            return $this->orderBy('id','DESC')->first();
        };
    }

    public function map(): Closure
    {
        return function ($callback){
            /** @var Builder $this */
            return $this->get()->map($callback);
        };
    }

    public function whereLike(): Closure
    {
        return function ($col, $value){
            /** @var Builder $this */
            return $this->where($col,'LIKE',"%$value%");
        };
    }
}
