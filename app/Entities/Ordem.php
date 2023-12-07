<?php

namespace App\Entities;

class Ordem {
    public $id;
    public $dono;
    public $problema;
    public $custo;
    public $carro;
    public $placa;
    public $pronto;

    // getters and setters for the properties

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    // Similarly, you can define getters and setters for other properties.

    // Any other methods related to the Usuario class
}