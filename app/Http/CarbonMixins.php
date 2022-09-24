<?php

namespace App\Http;

use Closure;
use Carbon\Carbon;

class CarbonMixins
{
    public function isEgyptionChristmasDay(): Closure
    {
        return function (){
            /** @var Carbon $this */
            return $this->month == 1 && $this->day == 7;
        };
    }

    public function isEgyption2011RevolutionDay(): Closure
    {
        return function (){
            /** @var Carbon $this */
            return $this->month == 1 && $this->day == 25;
        };
    }
}
