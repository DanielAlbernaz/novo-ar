<?php

use App\Models\Log;

/**
 * Classe Helpers funções de disponibilidade global
 *
 */

function print_rpre($dado)
{
        echo "<pre>";
        print_r($dado);
        echo "</pre>";
}

function createLog($user, $action, $form, $idData, $ip)
{
    $objLog = new Log();
    $objLog->usuario = $user;
    $objLog->acao = $action;
    $objLog->formulario = $form;
    $objLog->dado = $idData;
    $objLog->ip = $ip;
    $objLog->save();

}


