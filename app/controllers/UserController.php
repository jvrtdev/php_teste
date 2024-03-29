<?php 


namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class UserController {

    public function teste(Request $request, Response $response) {
        var_dump('teste');
        return $response;
    }
}