<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController
{
    /**
     * @Route("/first/{name}", name="first")
     */
    public function sayHello($name) {
        return new Response("<h1>Hello $name</h1>");
    }

}