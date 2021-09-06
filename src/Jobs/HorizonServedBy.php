<?php

namespace Creativeorange\ServedBy\Jobs;

abstract class HorizonServedBy
{
    /**
     * Adding tags for horizon
     */
    public function tags()
    {
        return ['served-by:'.config('served-by.identifier-string')];
    }
}