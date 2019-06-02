<?php

use PHPUnit\Framework\TestCase;

class UczenTest extends \PHPUnit\Framework\TestCase

{
    /**
     * @test
     */
    public function testImienia()
    {
        $uczen = new \Dziennik\Uczen\Uczen();


        $this->assertEquals($uczen->getImie(), 'Bartek');

    }
}