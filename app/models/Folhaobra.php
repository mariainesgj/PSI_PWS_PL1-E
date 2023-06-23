<?php
class Folhaobra extends \ActiveRecord\Model
{
    static $has_many = array(
        array('linhaobras'),
        array('servicos','through' => 'linhaobras')
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