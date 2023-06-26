<?php
class User extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('username', 'message' => 'O campo de username está vazio'),
        array('password', 'message' => 'O campo de password está vazio'),
        array('email', 'message' => 'O campo de email está vazio'),
        array('telefone', 'message' => 'O campo de telefone está vazio'),
        array('nif', 'message' => 'O campo de nif está vazio'),
        array('morada', 'message' => 'O campo de morada está vazio'),
        array('codpostal', 'message' => 'O campo de código postal está vazio'),
        array('localidade', 'message' => 'O campo de localidade está vazio'),
        array('role', 'message' => 'O campo de role está vazio'),
    );

    static $validates_size_of = array(
        array('username', 'maximum' => 20, 'too_long' => 'O campo excedeu o tamanho permitido'),
        array('password', 'maximum' => 20, 'too_long' => 'O campo excedeu o tamanho permitido'),
        array('telefone', 'minimum' => 9, 'too_short' => 'Insira 9 caractéres'),
        array('telefone', 'maximum' => 9, 'too_long' => 'O campo excedeu o tamanho permitido'),
        array('nif', 'minimum' => 9, 'too_short' => 'Insira 9 caracteres'),
        array('nif', 'maximum' => 9, 'too_long' => 'O campo excedeu o tamanho permitido'),
        array('morada', 'maximum' => 20, 'too_long' => 'O campo excedeu o tamanho permitido'),
        array('codigopostal', 'maximum' => 8, 'too_long' => 'O campo excedeu o tamanho permitido'),
        array('localidade', 'maximum' => 20, 'too_long' => 'O campo excedeu o tamanho permitido'),
        array('role', 'maximum' => 20, 'too_long' => 'O campo excedeu o tamanho permitido'),
    );

    static $validates_format_of = array(
        array('email', 'with' => '/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/' , 'message' => 'Email inválido'),
        array('codpostal', 'with' => '/^[0-9_]{4,4}+([0-9_]+)*[-][0-9_]{2,2}+([0-9_])$/' , 'message' => 'Código Postal inválido'),
        array('nif', 'with' => '/[0-9]$/' , 'message' => 'Apenas números'),
    );

    static $belongs_to = array(
        array('linhaobra'),
    );

    public static function findByUserPass($username,$password)
    {
        return User::find('first', array(
            'conditions' => array(
                'username = ? AND password = ?',
                $username, $password
            )
        ));
    }
}
?>