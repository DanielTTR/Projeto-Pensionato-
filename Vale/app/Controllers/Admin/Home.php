<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Home extends BaseController {

    public function index() {
        //Criar um objeto do model
        $moradiaModel = new \App\Models\MoradiaModel();

        //Obter as pessoas do BD por meio do model
        $conjuntos = $moradiaModel->findAll();

        //Passar o vetor de pessoas para a view
        $dadosConjuntos = [
            "conjuntos" => $conjuntos
        ];

        //Criar um objeto do model
        $usuarioModel = new \App\Models\UsuarioModel();

        //Obter as pessoas do BD por meio do model
        $usuarios = $usuarioModel->findAll();

        //Passar o vetor de pessoas para a view
        $dadosUsuarios = [
            "usuarios" => $usuarios
        ];

        //Criar um objeto do model
        $quartoModel = new \App\Models\QuartoModel();

        //Obter as pessoas do BD por meio do model
        $quartos = $quartoModel->findAll();

        //Passar o vetor de pessoas para a view
        $dadosQuartos = [
            "quartos" => $quartos
        ];

        $dadosView = ["usuariosDados" => $dadosUsuarios, "conjuntosDados" => $dadosConjuntos, "quartosDados" => $dadosQuartos];

        return view('Admin/Home/index', $dadosView);
    }

    public function insert() {
        $Tipo_conjunto = $this->request->getPost('Tipo_conjunto');
        $Nome_conjunto = $this->request->getPost('Nome_conjunto');
        $Responsavel = $this->request->getPost('Responsavel');
        $Telefone = $this->request->getPost('Telefone');
        $Bairro = $this->request->getPost('Bairro');
        $Rua = $this->request->getPost('Rua');
        $Foto = $this->request->getPost('Foto');
        $Descricao = $this->request->getPost('Descricao');

        $conjunto = [
            'Tipo_conjunto' => $Tipo_conjunto,
            'Nome_conjunto' => $Nome_conjunto,
            'Responsavel' => $Responsavel,
            'Telefone' => $Telefone,
            'Bairro' => $Bairro,
            'Rua' => $Rua,
            'Foto' => $Foto,
            'Descricao' => $Descricao
        ];

        //Criar um objeto model
        $moradiaModel = new \App\Models\MoradiaModel();

        //Inserir
        $moradiaModel->save($conjunto);

        //Exibir mensagem de sucesso / redirecionar para algum lugar
        return redirect()->to(base_url('Admin/Home/index'));
    }

    public function adiciona() {
        return view("adiciona");
    }



    public function insereQuarto() {
        $conj_id = $this->request->getPost('Conj_id');
        $Nome = $this->request->getPost('Nome_quarto');
        $Disponibilidade = $this->request->getPost('Disponibilidade');
        $Descricao = $this->request->getPost('Descricao');
        $Preco = $this->request->getPost('Preco');
        $Foto = $this->request->getPost('Foto');

        $quarto = [
            'conj_id' => $conj_id,
            'nome' => $Nome,
            'disponibilidade' => $Disponibilidade,
            'descricao' => $Descricao,
            'preco' => $Preco,
            'foto' => $Foto
        ];

        //Criar um objeto model
        $quartoModel = new \App\Models\QuartoModel();
        //Inserir
        $quartoModel->insert($quarto);

        //Exibir mensagem de sucesso / redirecionar para algum lugar
        return redirect()->to(base_url('Admin/Home/index'));
    }

    public function adicionaQuarto() {
        $db = db_connect();

        $conjunto = $db->table('conjunto');
        $query = $conjunto->select('Conj_id, Nome_conjunto');
        $conjuntoId = $query->get();

        $dadosView = [
            'conjuntoId' => $conjuntoId
        ];

        return view("adicionaQuarto", $dadosView);

        $db->close();
    }

   
    public function addsq() {
        return view('adicionaQuarto');
    }
}
