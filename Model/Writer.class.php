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

 Class Writer
 {
 	private $element;
 	private $name;


 	function __construct($arrayElements, $name)
 	{
 		$this->element = $arrayElements;
 		$this->name = $this->generatorHash($name);
 		$this->writeFile("Style Css Tool.\r\n");
 		$this->conf($this->element);
 	}

 	private function conf($element)
 	{
 		$array = array();
 		$prev = null;
 		$index; $i = 0;
 		foreach($element as $base)
 		{
 			if($base->id === $prev)
 				continue;

 			$index=0;
 			foreach($element as $value)
 			{
 				
	 			if($base->id === $value->id)
				{
					array_push($array, $value);
					if($element != $value)
					{
						array_push($array, $element);	
						unset($element[$i]);	
					}
					unset($element[$index]);	
					
				}
				$index++;
 			}
 			if($array != null)
 			{
 				$this->fileOut($array);
 				$array = array();
 			}

 			$prev = $base->id;
 			$i++;
 		}
 	}

 	private function fileOut($array)
 	{

 		$content = $array[0]->id."{ \r\n";

 		foreach($array as $css)
 		{
 			$content = $content."  ".$css->name.": ".$css->value.";\r\n";
 		}

 		$content = $content."} \r\n";
 		$this->writeFile($content);
 	}

 	private function writeFile($content)
 	{
	    $input = fopen('file/'.$this->name.".txt", "a");
	    fwrite($input, $content);
	    
	    fclose($input);
 	}
 }
 ?>