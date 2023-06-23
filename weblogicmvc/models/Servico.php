<?php
class Servico extends \ActiveRecord\Model
{
    static $has_many = array(
        array('linhaobra')
    );

    static $belongs_to = array(
        array('iva')
    );

}
?>