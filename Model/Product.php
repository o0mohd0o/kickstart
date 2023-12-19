<?php

declare(strict_types=1);

namespace Itcforu\Kickstart\Model;

class Product {

    private $category;

    public function __construct(
        Category $category
    )
    {
        $this->category = $category;
    }

    function getCategoryName(): string
    {
        return $this->category->getName();
    }
}
