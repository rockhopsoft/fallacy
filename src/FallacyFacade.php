<?php
/**
  * FallacyFacade in Laravel is a class which redirects static 
  * method calls to the dynamic methods of an underlying class
  *
  * Survloop - All Our Data Are Belong
  * @package  rockhopsoft/fallacy
  * @author  Morgan Lesko <rockhoppers@runbox.com>
  * @since 0.0.1
  */
namespace RockHopSoft\Fallacy;

use Illuminate\Support\Facades\Facade;

class FallacyFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'fallacy';
    }
}
