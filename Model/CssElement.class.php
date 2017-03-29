<?php

/**
 * Element of type <CSS>.
 *
 * @author Gian Fonseca 
 * @author  
 * @author 
 * @version 1.0
 * @since css-tool 2017-1
 * @link 
 */
Class CssElement {

    public $name;
    public $value;
    public $id;

    function __construct($name, $value, $id) {
        $this->name = $name;
        $this->value = $value;
        $this->id = $id;
    }

}

?>