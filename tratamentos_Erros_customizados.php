<?php
class minhaException extends Exception{
   private $error = '';
    public function __construct($error){
         $this->error = $error;
    }
    public function exibirMensagem(){
        echo '<div style="border:solid 2px #fff;padding:20px; margin:10px; background:#f00; color:#fff;">';
       
        return $this->error;
       
        echo '</div>';
    }
}
try {
    throw new minhaException("<strong> Error no processamento do arquivo</strong>");
    
}
catch (minhaException $e) {
    echo $e->exibirMensagem();
}
?>