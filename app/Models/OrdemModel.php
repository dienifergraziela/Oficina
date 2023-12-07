<?php

namespace App\Models;

use CodeIgniter\Model;

class ordemModel extends Model
{
    protected $table = 'ordem';
    protected $returnType = 'object';
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;

    protected $createdField = 'criado_em'; // Nome da coluna no banco de dados
    protected $updatedField = 'atualizado_em'; // Nome da coluna no banco de dados
    protected $deletedField = 'deletado_em'; // Nome da coluna no banco de dados
    protected $allowedFields = ['dono', 'problema', 'custo', 'carro', 'placa', 'pronto'];

    public function saveOrdem($data)
    {
        $this->insert($data);
        return $this->getInsertID();
    }
    /**
     * @uso Controller usuarios no método procurar com o autocomplete
     * @param string $term
     * @return array usuarios
     */






}
