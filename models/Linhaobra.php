<?php
class Linhaobra extends \ActiveRecord\Model
{
    static $belongs_to = array(
        array('servico')
    );
}
?>