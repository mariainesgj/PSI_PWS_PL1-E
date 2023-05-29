<?php
class Folhaobra extends \ActiveRecord\Model
{
    static $has_many = array(
        array('linhaobras'),
        array('servico','through' => 'linhaobras')
    );
}
?>