<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'employee_id',
        'department',
        'employment_status',
        'date_joined',
        'employment_type',
        'employee_email',
        'employee_password',
        'profile_picture',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'employee_password',
    ];

    public function getAuthPassword()
    {
        return $this->employee_password;
    }
}
