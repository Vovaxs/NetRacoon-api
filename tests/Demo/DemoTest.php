<?php
/**
 * Created by PhpStorm.
 * Author: Vovaxs
 * Date: 16/09/2015
 * Time: 20:22
 */

namespace Demo;


class DemoTest extends \PHPUnit_Framework_TestCase
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
