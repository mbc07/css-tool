<?php 
/** 
 * File Manager.
 *
 * @author Gian Fonseca 
 * @author  
 * @author 
 * @version 1.0
 * @since css-tool 2017-1
 * @link 
 */

 Class FileManager
 {
 	public function op($fileName,$id)
 	{
 		$this->generatorHash($fileName);

 		 if(isset($_FILES['fileUpload']))
   	{
      
      $ext = strtolower(substr($_FILES['fileUpload']['name'],-4)); //Pegando extensão do arquivo
      $new_name = $this->generatorHash($fileName).".".$ext; //Definindo um novo nome para o arquivo
      $dir = '../Model/uploads/'; //Diretório para uploads
 
      move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
      echo '<script>location.href="pageController.php?url=index&edit=true";</script>';
  	}elseif (isset($_POST['texto'])) {
        $texto = $_POST['texto'];
         $new_name = $this->generatorHash($fileName).".html";
        $arquivo = fopen($new_name, 'w');
        fwrite($arquivo, $texto);
        fclose($arquivo);

        $caminhoatual = "../Controller/";
		$caminhodestino = "../Model/uploads/";
        rename($caminhoatual.$new_name, $caminhodestino.$new_name);
        echo '<script>location.href="pageController.php?url=index&edit=true";</script>';
    }else{
        echo "<script>alert('Erro de envio');</script>";
    }

 	}

 	/**
 	 * Metodo gera uma hash.
 	 *
 	 * @param  String nome.
 	 * @return String - Hash.
 	 *
 	*/
 	public function generatorHash($name)
 	{
 		return MD5($name);
 	}
 }
 ?>