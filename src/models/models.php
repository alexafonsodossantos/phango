<?php
class Model{
    class intField{
        public function __constructor($len, $default, $nullable, $comment = ""){
            // Criação do campo
        }
    }

    class charField{
        public function __constructor($len, $default, $nullable, $collation, $comment = ""){
            // Criação do campo
        }
    }

    class dateField{
        public function __constructor($default, $nullable, $collation, $comment = ""){
            // Criação do campo
        }
    }

    class timeField{
        public function __constructor($default, $nullable, $collation, $comment = ""){
            // Criação do campo
        }
    }

    class dateTimeField{
        public function __constructor($len, $default, $nullable, $collation, $comment = ""){
            // Criação do campo
        }
    }

    class moneyField{
        public function __constructor($len, $default, $nullable, $collation, $comment = ""){
            // Criação do campo
        }
    }

    class decimalField{
        public function __constructor($len, $default, $nullable, $collation, $comment = ""){
            // Criação do campo
        }
    }

    class imageField{
        public function __constructor($len, $default, $nullable, $collation, $comment = ""){
            // Criação do campo
        }
    }

    class charField{
        public function __constructor($len, $default, $nullable, $collation, $comment = ""){
            // Criação do campo
        }
    }

    class booleanField{
        public function __constructor($len, $default, $nullable, $collation, $comment = ""){
            // Criação do campo
        }
    }

    
    function getAll(){
        // Retorna todos os valores
    }

    function getById($id){
        // Retorna valores pelo ID
    }

    function migrate(){
        // Migra tabela e campos para o banco de dados
    }

    function insert($data){
        // Insere dados
    }

    function update($data){
        // Atualiza dados 
    }

    function delete($id){ 
        // Remove dados
    }

    function dumpSQL(){
        //Dump dos conteudos da tabela no formato SQL
    }

    function dumpJSON(){
        //Dump dos conteudos da tabela no formato JSON
    }

}





?>