<?php

require_once 'app/api/ViaCep.php';

$dadosCEP = ViaCep::consultarCEP('71573003');

echo '<pre>';
print_r($dadosCEP);