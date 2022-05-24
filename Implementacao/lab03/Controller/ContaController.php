<?php
require_once 'C:/programas_php/htdocs/workspace/lab03/config/config.php';
require_once 'C:/programas_php/htdocs/workspace/lab03/Model/ContaModel.php';

class ContaController extends ContaModel
{
    public static function buscaSaldo($con,$data)
    {
        return parent::select($con,$data);
    }
    public static function enviarMoeda($con,$data)
    {
        return parent::insert($con,$data);
    }
}


?>