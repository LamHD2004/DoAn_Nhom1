<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Enums\UserRole;


class MyUser extends Model{
    use HasFactory;

    protected $table = 'my_users';


    public function isAdmin()
{
    return $this->role === UserRole::Administrator;
}

}
