<?php
class Servico extends \ActiveRecord\Model
{
    static $belongs_to = array(
        array('linhaobra')
    );
}
?>