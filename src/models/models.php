<?php

namespace Models;

class Model {
    
    public function __construct(){
        //
    }

    public function getAll(){
        // Retorna todos os valores
    }

    public function getById($id){
        // Retorna valores pelo ID
    }

    public function migrate(){
        $reflect = new \ReflectionClass($this); // Obtenha uma instância de reflexão da classe atual
        $props = $reflect->getProperties(\ReflectionProperty::IS_PUBLIC); // Obtenha todas as propriedades públicas
        var_dump($reflect);
        foreach ($props as $prop) {
            echo $prop->getName() . "\n"; // Acesse o nome da propriedade
        }
    }

    public function insert($data){
        // Insere dados
    }

    public function update($data){
        // Atualiza dados 
    }

    public function delete($id){ 
        // Remove dados
    }

    public function dumpSQL(){
        //Dump dos conteudos da tabela no formato SQL
    }

    public function dumpJSON(){
        //Dump dos conteudos da tabela no formato JSON
    }

    public function obliterate(){
        // Remove dados e tabela
    }
}


class intField{
    public function __construct($len, $default, $nullable, $comment = ""){
        $this->type = __CLASS__;
        $this->sqlType = 'INT('.$len.')';
        $this->len = $len;
        $this->default = $default;
        $this->nullabe = $nullable;
        $this->comment = $comment;
    }

}

class charField{
    public function __constructor($len, $default, $nullable, $collation, $comment = ""){
        $this->type = __CLASS__;
        $this->sqlType = 'VARCHAR('.$len.')';
        $this->len = $len;
        $this->default = $default;
        $this->nullabe = $nullable;
        $this->comment = $comment;
        
    }
}

class dateField{
    public function __constructor($default, $nullable, $collation, $comment = ""){
        $this->type = __CLASS__;
        $this->sqlType = 'DATE';
        $this->len = $len;
        $this->default = $default;
        $this->nullabe = $nullable;
        $this->comment = $comment;
        
    }
}

class timeField{
    public function __constructor($default, $nullable, $collation, $comment = ""){
        $this->type = __CLASS__;
        $this->sqlType = 'TIME';
        $this->len = $len;
        $this->default = $default;
        $this->nullabe = $nullable;
        $this->comment = $comment;
        
    }
}

class dateTimeField{
    public function __constructor($len, $default, $nullable, $collation, $comment = ""){
        $this->type = __CLASS__;
        $this->sqlType = 'DATETIME';
        $this->len = $len;
        $this->default = $default;
        $this->nullabe = $nullable;
        $this->comment = $comment;
        
    }
}

class moneyField{
    public function __constructor($len, $default, $nullable, $collation, $comment = ""){
        $this->type = __CLASS__;
        $this->sqlType = 'DECIMAL';
        $this->len = $len;
        $this->default = $default;
        $this->nullabe = $nullable;
        $this->comment = $comment;
        
    }
}

class decimalField{
    public function __constructor($len, $default, $nullable, $collation, $comment = ""){
        $this->type = __CLASS__;
        $this->sqlType = 'DECIMAL';
        $this->len = $len;
        $this->default = $default;
        $this->nullabe = $nullable;
        $this->comment = $comment;
        
    }
}

class imageField{
    public function __constructor($len, $default, $nullable, $collation, $comment = ""){
        $this->type = __CLASS__;
        $this->sqlType = 'VARCHAR(255)';
        $this->len = $len;
        $this->default = $default;
        $this->nullabe = $nullable;
        $this->comment = $comment;
    }
}


class booleanField{
    public function __constructor($len, $default, $nullable, $collation, $comment = ""){
        $this->type = __CLASS__;
        $this->sqlType = 'TINYINT';
        $this->len = $len;
        $this->default = $default;
        $this->nullabe = $nullable;
        $this->comment = $comment;
    }
}






?>