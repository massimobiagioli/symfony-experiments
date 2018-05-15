<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class HomeController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return new Response(
            '<html><body>Home</body></html>'
        );
    }
}