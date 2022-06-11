<?php

class ViaCep {
    /**
     * Método responsável por consultar um CEP no ViaCEP
     * @param string $cep
     * @return array
     */

     public static function consultarCEP($cep) {
         //INICIA O CURL
         $curl = curl_init();

         curl_setopt_array($curl, [
             CURLOPT_URL            => 'https://viacep.com.br/ws/' .$cep .  '/json/',
             CURLOPT_RETURNTRANSFER => true,
             CURLOPT_CUSTOMREQUEST  => 'GET'
         ]);

         //RESPONSE
         $response  = json_decode(curl_exec($curl), true);

         //FECHA A CONEXÃO ABERTA
         curl_close($curl);

         return isset($response['cep']) ? $response : null;
     }
}
