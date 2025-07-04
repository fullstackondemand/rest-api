<?php
declare(strict_types=1);
namespace RestAPI\Api\User;

use RestJS\Model\AbstractModel;
use RestAPI\Api\User\User;

class Model extends AbstractModel {

    protected function setEntity() {
        return User::class;
    }
}