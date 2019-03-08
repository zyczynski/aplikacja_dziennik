<?php

use PHPUnit\Framework\TestCase;

class UczenTest extends \PHPUnit\Framework\TestCase

{
    public function testImienia()
    {
        $uczen = new \Dziennik\Uczen\Uczen();


        $this->assertEquals($uczen->getImie(), 'Bartek');


    }
}