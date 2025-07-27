<?php
declare(strict_types=1);
namespace App\Api\User;

use RestJS\Controller\AbstractAuthController;
use App\Api\User\Model;

class Controller extends AbstractAuthController {

    public function __construct(private Model $model) { 
        parent::__construct($model);
    }
}