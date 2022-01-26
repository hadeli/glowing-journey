<?php declare(strict_types=1);

namespace App\Model;

class Book
{

    public function __construct(
        private int $id,
        private string $label,
        private string $isbn,
        private string $category,
    )
    {
    }

    /**
     * @return int
     */
    public function id(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function label(): string
    {
        return $this->label;
    }

    /**
     * @return string
     */
    public function isbn(): string
    {
        return $this->isbn;
    }

    /**
     * @return string
     */
    public function category(): string
    {
        return $this->category;
    }


}