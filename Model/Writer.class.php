<?php

/**
 * Write Output style.css.
 *
 * @author Gian Fonseca 
 * @author  
 * @author 
 * @version 1.0
 * @since css-tool 2017-1
 * @link 
 */
Class Writer {

    private $element;
    private $name;

    function __construct($arrayElements, $name) 
    {
        $this->name = $name;
        $this->element = $arrayElements;
        $this->writeFile("Style Css Tool.\r\n");
        $this->conf($this->element);
    }

    /**
     * Metodo faz a configuracao do valores do array.
     *
     * @param  ElementCss[] elemtn.
     *
     */
    private function conf($element) 
    {
        $array = array();
        $prev = null;
        $index;
        $i = 0;
        foreach ($element as $base) 
        {
            if ($base->id === $prev)
                continue;
            $index = 0;
            foreach ($element as $value) 
            {

                if ($base->id === $value->id) 
                {
                    array_push($array, $value);
                    unset($element[$index]);
                }
                $index++;
            }
            if ($array != null) 
            {
                $this->fileOut($array);
                $array = array();
            }
            unset($element[$i]);
            $prev = $base->id;
            $i++;
        }
    }

    /**
     * Metodo concatena conteudo que sera gravado.
     *
     * @param  ElementCss[] array.
     *
     */
    private function fileOut($array) 
    {
        $content = $array[0]->id . "{ \r\n";
        foreach ($array as $css) 
        {
            $content = $content . "  " . $css->name . ": " . $css->value . ";\r\n";
        }
        $content = $content . "} \r\n";
        $this->writeFile($content);
    }

    /**
     * Metodo grava em arquivo.
     *
     * @param  String Do que sera gravado no arquivo.
     *
     */
    private function writeFile($content) 
    {
        $input = fopen(__DIR__.'/file/' . $this->name . ".css", "a");
        fwrite($input, $content);

        fclose($input);
    }

}

?>