<?php

namespace App\Models;

use CodeIgniter\Model;

class QuartoModel extends Model
{
    protected $table      = 'quarto';
    protected $primaryKey = 'quarto_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['conj_id','nome', 'disponibilidade', 'descricao', 'preco', 'foto'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function pegaQuarto ($conj_id)
    {
        
    }
}