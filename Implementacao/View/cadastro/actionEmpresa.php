<?php
require_once ('../../config/config.php');
require_once ('../../Controller/EmpresaController.php');
require_once ('../../Controller/VantagensController.php');

if(isset($_POST['data']) && !empty($_POST['data'])){
    
    try{
        EmpresaController::criarEmpresa($con,$_POST['data']);
    }catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }finally{
        header('Location: ../painel/painel.php');
    }
}
if(isset($_POST['atualiza']) && !empty($_POST['atualiza'])){
    
    try{
        EmpresaController::alterarEmpresa($con,$_POST['atualiza']);
    }catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }finally{
        header('Location: ../painel/painel.php');
    }
}
if(isset($_POST['produto']) && !empty($_POST['produto'])){
    try{
        VantagensController::adicionarVantagem($con,$_POST['produto']);
    }catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }finally{
        header('Location: ../painel/painel.php');
    }
}
?>