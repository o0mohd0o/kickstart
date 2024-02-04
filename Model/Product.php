<?php

declare(strict_types=1);

namespace Itcforu\Kickstart\Model;

class Product {

    /**
     * @param Category $category
     */
    public function __construct(private Category $category,){}

    /**
     * @return string
     */
    function getCategoryName(): string
    {
        return $this->category->getName();
    }
}
