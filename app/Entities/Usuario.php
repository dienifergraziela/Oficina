<?php

namespace App\Entities;

class Usuario {
    public $id;
    public $nome;
    public $email;
    public $cpf;
    public $telefone;
    public $ativo;
    public $is_admin;

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