<?php

namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Container\ContainerInterface;

class TestController extends AbsController {

    public function testpage(Request $request, Response $response) {
        $html = $this->ci->get('templating')->render('testpage.html');
        $response->getBody()->write($html);
        return $response;
    }
}
