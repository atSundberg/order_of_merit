<?php

namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Container\ContainerInterface;

class HomeController extends AbsController {

    public function homepage(Request $request, Response $response) {
        $html = $this->ci->get('templating')->render('homepage.html');
        $response->getBody()->write($html);
        return $response;
    }
}
