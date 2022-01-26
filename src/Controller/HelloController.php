<?php declare(strict_types=1);

namespace App\Controller;

use App\Model\Book;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloController extends AbstractController
{
    public function helloAction()
    {
        return $this->json("Hello World");
    }
}
