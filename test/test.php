<?php
require_once('../src/models/models.php');
require_once('../src/inc/clDB.php');



use Models\{
    Model,
    intField
};


class Produtos extends Models\Model {
    public $id;
    public function __construct(){
        $this->id = new intField(11, 0, false, "test");
    }
}


$test = new Produtos();
$test->migrate();


?>