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
        $k=0;
        $i=0;
        for ($size=sizeof($element); $k < $size; $k++) 
        {
            $base = $element[$k];

            if ($base->id === $prev)
                continue;

            for (; $i < $size; $i++) 
            {
                $value = $element[$i];

                if ($base->id === $value->id) 
                {
                    array_push($array, $value);
                    unset($element[$i]);
                    $i--;
                    $size--;
                }
            }
            
            array_push($array, $base);
            unset($element[$k]);
            $k--;
            $size--;
            $this->fileOut($array);
            $array = array();
            
            $prev = $base->id;
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