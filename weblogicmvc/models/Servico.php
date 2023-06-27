<?php
class Servico extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('referencia', 'message' => 'O campo de referencia está vazio'),
        array('descricao', 'message' => 'O campo de descrição está vazio'),
        array('precohora', 'message' => 'O campo de preço/hora está vazio'),
        array('id_iva', 'message' => 'O campo tem de ter um iva selecionado'),

    );

    static $validates_size_of = array(
        array('referencia', 'maximum' => 20, 'too_long' => 'O campo excedeu o tamanho permitido'),
        array('descricao', 'maximum' => 60, 'too_long' => 'O campo excedeu o tamanho permitido'),
        array('precohora', 'maximum' => 5, 'too_long' => 'O campo excedeu o tamanho permitido'),
    );

    static $belongs_to = array(
        array('iva')
    );

}
?>