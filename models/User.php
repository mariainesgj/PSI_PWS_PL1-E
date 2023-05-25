<?php
class User extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('username'),
        array('password')
    );

    public static function findByUserPass($nomeUser,$passUser)
    {
        return User::find('first', array(
            'conditions' => array(
                'username = ? AND password = ?',
                $nomeUser, $passUser
            )
        ));
    }
}
?>