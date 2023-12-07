<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $returnType = 'object';
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;

    protected $createdField = 'criado_em'; // Nome da coluna no banco de dados
    protected $updatedField = 'atualizado_em'; // Nome da coluna no banco de dados
    protected $deletedField = 'deletado_em'; // Nome da coluna no banco de dados
    protected $allowedFields = ['nome', 'email', 'cpf', 'telefone'];


    /**
     * @uso Controller usuarios no método procurar com o autocomplete
     * @param string $term
     * @return array usuarios
     */






}
