<?php namespace Digitalkrikits\Picturecut\Facades;

use Illuminate\Support\Facades\Facade;

class Picturecut extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'picturecut';
    }

}