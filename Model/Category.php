<?php

declare(strict_types=1);

namespace Itcforu\Kickstart\Model;

use Itcforu\Kickstart\Api\Data\CategoryInterface;
class Category implements CategoryInterface
{
    public function getName(): string
    {
        return 'Category Name';
    }
}
