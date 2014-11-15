<?php
class Type extends AppModel{
    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
        ),
        'price' => array(
            'rule' => 'notEmpty',
        )
    );
}
?>