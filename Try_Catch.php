<?php
//try  siginificar que ocorreu um erro
//catch siginifica que o error precisa ser tratado
//throw siginifica que o error não precisa ser tratado
//finaly siginifica que o codigo não precisa ser executado


 try {
     echo "Hello World <br>";
       // $sql = "SELECT * FROM usuarios";
        //mysql_query($sql);//retorna o resultado da consulta
        if (!file_exists('require_teste.txt'));//verifica se o arquivo existe)
        {
           throw new Exception('Perdão aos usuarios deste sistema hoje ' . date('d/m/Y H:i:s'). ' Estamos trabalhando na manutencao do sistema por favor tente novamente mais tarde.<br>');
                       
        }

 } catch (Error $e){
     echo "Erro ao executar a consulta<br>";
     echo $e->getMessage();"<br>";
    }
    catch (Exception $e){
        echo "Erro ao executar a consulta<br>";
        echo $e->getMessage();"<br>";
    }

 
 finally {
     echo "Finally";
 }
?>