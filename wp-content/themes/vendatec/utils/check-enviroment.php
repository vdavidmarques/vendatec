<?php
    function checkEnvironment()
    {
        $serverUrl = $_SERVER['HTTP_HOST'];

        $productionUrl = 'https://vendatec.com.br';
        $localhostUrl = 'localhost:8080';

        $production = '115';
        $local = '57';

        if ($serverUrl === $productionUrl) {
            return $production;         
        }elseif($serverUrl === $localhostUrl) {
            return $local;
        }else{
            return 'Ambiente desconhecido';
        }

    }
    $environment = checkEnvironment();
    $id = $environment;