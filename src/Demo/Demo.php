<?php
/**
 * Created by PhpStorm.
 * Author: Vovaxs
 * Date: 16/09/2015
 * Time: 20:36
 */

namespace NetRacoon\NetRacoonApi\Demo;

use NetRacoon\NetRacoonApi\Demo2\Demo2;

class Demo
{
    public function execute()
    {
        return ( new Demo2() )->execute();
    }
}