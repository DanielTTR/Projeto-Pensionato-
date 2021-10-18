<?php

namespace App\Controllers;

class Home extends BaseController {

  public function index()
    {
        //Criar um objeto do model
        $moradiaModel = new \App\Models\MoradiaModel();

        //Obter as pessoas do BD por meio do model
        $conjuntos = $moradiaModel->findAll();

        //Passar o vetor de pessoas para a view
        $dadosView = [
            "conjuntos" => $conjuntos
        ];

        return view('index', $dadosView);
    }
    public function contato() {
        return view("contato");
    }
    public function quartos() {
        $conj_id = $this->request->getGet('Conj_id');

        $db = db_connect();

        $quarto = $db->table('quarto');
        $quartos = $quarto->getWhere(['conj_id' => $conj_id])->getResultObject();

        $conjunto = $db->table('conjunto');
        $query = $conjunto->select('Nome_conjunto');
        $conjuntoNome = $query->getWhere(['conj_id' => $conj_id])->getResultObject();

        $dadosQuarto = [
            'quartos' => $quartos
        ];

        $dadosConjunto = [
            'conjunto' => $conjuntoNome
        ];

        $dadosView = [
            'dadosQuarto' => $dadosQuarto, 'dadosConjunto' => $dadosConjunto
        ];

        return view("quartos", $dadosView);

        $db->close();
    }
    public function sobre(){
        return view('sobre');
    }
    

}
