<?php
class Iva extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('percentagem', 'message' => 'O campo de percentagem está vazio'),
        array('descricao', 'message' => 'O campo de descrição está vazio'),
        array('vigor', 'message' => 'O campo do em vigor está vazio'),
    );

    static $validates_size_of = array(
        array('percentagem', 'maximum' => 20, 'too_long' => 'O campo excedeu o tamanho permitido'),
        array('descricao', 'maximum' => 20, 'too_long' => 'O campo excedeu o tamanho permitido'),
    );
    static $has_many = array(
        array('servico'),
    );
}
?>