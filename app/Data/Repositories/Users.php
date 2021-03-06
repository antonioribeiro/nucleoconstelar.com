<?php

namespace App\Data\Repositories;

use App\Data\Entities\User;

class Users
{
    public function getAdmins()
    {
        return collect(explode(',', config('app.mail.admins')))->map(function($email) {
            return new User(['email' => $email]);
        });
    }
}
