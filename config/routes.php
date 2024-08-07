<?php

declare(strict_types=1);

return [
    'GET|/' => \Dbseller\Aluraplay\Controller\VideoListController::class,
    'GET|/new-video' => \Dbseller\Aluraplay\Controller\VideoFormController::class,
    'POST|/new-video' => \Dbseller\Aluraplay\Controller\NewVideoController::class,
    'GET|/edit-video' => \Dbseller\Aluraplay\Controller\VideoFormController::class,
    'POST|/edit-video' => \Dbseller\Aluraplay\Controller\EditVideoController::class,
    'GET|/delete-video' => \Dbseller\Aluraplay\Controller\DeleteVideoController::class,
    'GET|/login' => \Dbseller\Aluraplay\Controller\LoginFormController::class,
    'POST|/login' => \Dbseller\Aluraplay\Controller\LoginController::class,
    'GET|/logout' => \Dbseller\Aluraplay\Controller\LogoutController::class,
    'GET|/videos-json' => \Dbseller\Aluraplay\Controller\JsonVideoListController::class,
    'GET|/videos' => \Dbseller\Aluraplay\Controller\NewJsonVideoController::class,
];
