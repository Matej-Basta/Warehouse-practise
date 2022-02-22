<?php
class Warehouse
{
    public $name = null;

    protected $nr_of_crates = 0;

    protected $crates = [];

    public function addCrate($contents)
    {
        $this->crates[] = $contents;
        $this->nr_of_crates++;
    }

    public function getCrate()
    {
        return $this->crates;
    }

    public function getNrOfCrates()
    {
        return $this->nr_of_crates;
    }
}

$warehouse = new Warehouse;

$warehouse->name = "Docks warehouse";

$warehouse->addCrate('Arc of Covenant');
$warehouse->addCrate('Doomsday device');
$warehouse->addCrate('Box of contortionists');

