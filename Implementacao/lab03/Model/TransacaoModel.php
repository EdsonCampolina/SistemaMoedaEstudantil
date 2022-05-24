<?php
require_once 'C:/programas_php/htdocs/workspace/lab03/config/config.php';
class TransacaoModel {

    public static function insert($con,$data)
    {
       
        $sql = "INSERT INTO tbtransacao (valor,tipo,fk_usuario_envio,fk_usuario_recebimento)
        VALUES ('{$data['valor']}','{$data['tipo']}','{$data['fk_remetente']}',{$data['fk_destinatario']});";
        $result = mysqli_query($con,$sql);
        if(!$result) {
            echo 'Erro ao cadastrar Vantagem';
            die();
        }
    }
    public static function selectByIdEnvio($con,$data)
    {
        $sql = "SELECT * FROM tbtransacao WHERE fk_usuario_envio = $data AND tipo = 'envio' AND usuarioTipo = $data";
        $result = mysqli_query($con,$sql);
        $arrayTransacoes = array();
        while ($row = $result->fetch_assoc()){
            $arrayTransacoes [] = $row;
        }
        return $arrayTransacoes;
    }
    public static function selectByIdRecebimento($con,$data)
    {
        $sql = "SELECT * FROM tbtransacao WHERE fk_usuario_recebimento = $data AND tipo = 'recebimento' AND usuarioTipo = $data";
        $result = mysqli_query($con,$sql);
        $arrayTransacoesRecebimento = array();
        while ($row = $result->fetch_assoc()){
            $arrayTransacoesRecebimento [] = $row;
        }
        return $arrayTransacoesRecebimento;
    }
    
}
?>