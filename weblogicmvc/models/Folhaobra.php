<?php
class Folhaobra extends \ActiveRecord\Model
{
    static $belongs_to = array(
        array('empresa'),
        array('cliente', 'class_name'=>'user', 'foreign_key'=> 'id_cliente')
    );

    public function atualizartotais()
    {
        /*percorrer todas as linhas
        $valortotal
        $ivatotal
        $total
        atribuir os valores aos modelos e save*/
    }

}
?>