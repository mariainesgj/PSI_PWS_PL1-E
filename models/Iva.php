<?php
class Iva extends \ActiveRecord\Model
{
    static $belongs_to = array(
        array('servico'),
    );
}
?>