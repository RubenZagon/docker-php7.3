<?php

$aContainer = $aApp -> getContainer();

$aContainer['view'] = function ($cContainer){

    $aConfig = $cContainer -> get ('config')['view'];

    $vViews = new \Slim\Views\Twig( $aConfig['path'], $aConfig['twig']);


    $vViews -> addExtension (new \Slim\Views\TwigExtension(
        $cContainer -> router,
        $cContainer -> request -> getUri ()
    ));
};

$aContainer['Frases_Controller'] = function ($cContainer) {
    return new \Controller\Frases_Controller($cContainer);
};

$aContainer['db'] = function ($cContainer) {

    $aConfig = $cContainer -> get('config')['db'];
};