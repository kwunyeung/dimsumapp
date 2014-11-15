<?php
class Dimsum extends AppModel{
    public $validate = array(
        'name' => array('rule' => 'notEmpty'),
        'stock' => array('rule' => 'notEmpty'),
        'type_id' => array('rule' => 'notEmpty')
    );
}
?>