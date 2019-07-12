<?php
/**
 * Created by PhpStorm.
 * User: Bartek
 * Date: 2019-03-08
 * Time: 15:55
 */

namespace Dziennik\Uczen;


class Uczen
{
    private $id;
    private $imie;
    private $nazwisko;
    private $klasa;

    public function __construct($id, $imie, $nazwisko, $klasa)
    {
        $this->id=$id;
        $this->imie=$imie;
        $this->nazwisko=$nazwisko;
        $this->klasa=$klasa;
    }

    /**
     * @return mixed
     */
    public function getImie()
    {
        return $this->imie;
    }
}