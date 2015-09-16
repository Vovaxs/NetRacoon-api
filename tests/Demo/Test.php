<?php
/**
 * Created by PhpStorm.
 * Author: Vovaxs
 * Date: 16/09/2015
 * Time: 20:22
 */

namespace Vovaxs\NetRacoonApi\Demo;


class Test extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function givenNothingDoDemo()
    {
        $h = 1;
        $this->assertEquals(1, $h);
    }
}
