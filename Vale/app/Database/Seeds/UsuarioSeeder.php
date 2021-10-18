<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioSeeder extends Seeder {

    public function run() {
        $usuarioModel = new \App\Models\UsuarioModel;

        $usuario = [
            'nome' => 'Daniel Rodrigues Ramalho',
            'email' => 'admin@admin.com',
            'cpf' => '114.240.520-68',
            'telefone' => '33-99999-9999',
        ];

        $usuarioModel->protect(false)->insert($usuario);

        $usuario = [
            'nome' => 'taioba tatata klee',
            'email' => 'naka@baka.com',
            'cpf' => '031.879.980-46',
            'telefone' => '33-88888-8888',
        ];
    
        
        $usuarioModel->protect(false)->insert($usuario);
        
        dd($usuarioModel->errors());
    }

}
