<?php

declare(strict_types=1);

namespace Itcforu\Kickstart\Model;

use Itcforu\Kickstart\Api\Data\CategoryInterface;

class Product {

    /**
     * @param Category $category
     */
    public function __construct(
        private CategoryInterface $category,
    ){}

    /**
     * @return string
     */
    function getCategoryName(): string
    {
        return $this->category->getName();
    }
}
