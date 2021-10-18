<?php

namespace App\Models;

use CodeIgniter\Model;

class MoradiaModel extends Model
{
    protected $table      = 'conjunto';
    protected $primaryKey = 'Conj_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['Tipo_conjunto', 'Nome_conjunto', 'Responsavel', 'Telefone', 'Bairro', 'Rua', 'Foto', 'Descricao','CONJUNTO'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}