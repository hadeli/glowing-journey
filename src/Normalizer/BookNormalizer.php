<?php declare(strict_types=1);

namespace App\Normalizer;

use App\Model\Book;
use Symfony\Component\Serializer\Normalizer\ContextAwareNormalizerInterface;

class BookNormalizer implements ContextAwareNormalizerInterface
{

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return $data instanceof Book;
    }

    public function normalize(mixed $object, string $format = null, array $context = [])
    {
        /** @var Book $object */
        return [
            'id' => $object->id(),
            'category' => $object->category(),
            'isbn' => $object->isbn(),
            'label' => $object->label(),
        ];
    }
}
