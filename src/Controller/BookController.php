<?php declare(strict_types=1);

namespace App\Controller;

use App\Model\Book;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class BookController extends AbstractController
{
    public function getAction(): \Symfony\Component\HttpFoundation\JsonResponse
    {
        return $this->json(new Book(1, 'A label', 'An isbn', 'A category'));
    }

    public function postAction(Request $request)
    {
       $book = $this->payload($request);
        return $this->json( new Book(
           id: $book['id'] ?? random_int(1, 100),
            label: $book['label'],
            isbn: $book['isbn'],
            category: $book['category'],
        ));
    }


    public function patchAction(Request $request)
    {
        $oldBook = new Book(random_int(1, 100), 'A label', 'An isbn', 'A category');

        $book = $this->payload($request);

        return $this->json( new Book(
           id: $oldBook->id(),
            label: $book['label'],
            isbn: $oldBook->isbn(),
            category: $book['category'],
        ));
    }

    private function payload(Request $request): array
    {
        return json_decode($request->getContent(), true, 512, JSON_THROW_ON_ERROR);
    }
}