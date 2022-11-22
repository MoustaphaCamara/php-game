<?php
class Personnage
{
    public string $nom;
    public int $pv;
    public int $power;
    public int $pa;


    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    public function attack()
    {
    }
    public function receive()
    {
    }
}
