<?php
class Empresa extends \ActiveRecord\Model
{
    static $validates_presences_of = array(
        array('designacaosocial'),
        array('email'),
        array('telefone'),
        array('nif'),
        array('morada'),
        array('codpostal'),
        array('localidade'),
        array('capitalsocial'),
    );
}
?>