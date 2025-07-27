<?php
declare(strict_types=1);
namespace App\Api\User;

use RestJS\Model\AbstractModel;
use App\Api\User\User;

class Model extends AbstractModel {

    protected function setEntity() {
        return User::class;
    }
}