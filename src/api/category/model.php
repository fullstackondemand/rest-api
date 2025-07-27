<?php
declare(strict_types=1);
namespace App\Api\Category;

use RestJS\Model\AbstractModel;
use App\Api\Category\Category;

class Model extends AbstractModel {

    protected function setEntity() {
        return Category::class;
    }
}