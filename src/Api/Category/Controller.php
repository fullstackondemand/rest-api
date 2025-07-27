<?php
declare(strict_types=1);
namespace App\Api\Category;

use RestJS\Controller\AbstractController;
use App\Api\Category\Model;

class Controller extends AbstractController {

    public function __construct(private Model $model) { 
        parent::__construct($model);
    }
}