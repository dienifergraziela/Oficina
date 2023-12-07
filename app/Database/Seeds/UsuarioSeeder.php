<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        $usuarioModel = new \App\Models\UsuarioModel;

        $usuario = [
            'nome' => 'Dienifer Ripl',
            'email' => 'admin@gmail.com',
            'cpf' => '859.201.210-41',
            'telefone' => '51 98319-0035',
        ];

        $usuarioModel -> protect(false)->insert($usuario);

        $usuario = [
            'nome' => 'Fulano de tal',
            'email' => 'fulano@gmail.com',
            'cpf' => '501.380.390-03',
            'telefone' => '51 98319-0017',
        ];

        $usuarioModel -> protect(false)->insert($usuario);

        dd($usuarioModel->errors());
    }

}
