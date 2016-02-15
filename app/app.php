<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Queen.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });

    $app->get("/queen_attack", function() use ($app) {
        $my_Queen = new Queen($_GET['qx_coord'], $_GET['qy_coord']);
        $results = $my_Queen->canAttack($_GET['ix_coord'], $_GET['iy_coord']);
        return $app['twig']->render('index.html.twig', array(
            'result' => $results
        ));

    });

    return $app;
?>
