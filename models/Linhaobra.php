<?php
class Linhaobra extends \ActiveRecord\Model
{
    static $belongs_to = array(
        array('folhaobra'),
        array('servico', 'class_name'=>'servico', 'foreign_key'=> 'id_servico')
    );

}
?>