<?php

    class nome{

        public $nome;

        public function pegar_nome($recebe_nome){
            $this->nome = $recebe_nome;
        }
        public function devolver_nome(){
            return $this->nome;
        }
    }

?>