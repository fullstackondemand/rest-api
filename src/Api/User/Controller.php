<?php
declare(strict_types=1);
namespace RestAPI\Api\User;

use RestJS\Controller\AbstractAuthController;
use RestAPI\Api\User\Model;

class Controller extends AbstractAuthController {

    public function __construct(private Model $model) { 
        parent::__construct($model);
    }
}