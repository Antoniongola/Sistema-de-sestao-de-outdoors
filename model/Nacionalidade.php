<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Nacionalidade
 *
 * @author Ngola
 */
class Nacionalidade {
    private $id;
    private $nome;
    
    function __construct($id, $nome) {
        $this->id = $id;
        $this->nome = $nome;
    }
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }
}