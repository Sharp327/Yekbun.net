<?php

namespace App\Models;

use Mail;
use Exception;
use App\Mail\SendCodeMail;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent; // MongoDB base class
use Illuminate\Foundation\Auth\User as Authenticatable; // Supports Laravel authentication
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract; // Interface for authentication
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Laravel\Sanctum\HasApiTokens; // For API token-based authentication
use Illuminate\Notifications\Notifiable; // Allows user notifications
use Maklad\Permission\Traits\HasRoles; // If you're using role-based permissions
use Illuminate\Foundation\Auth\Access\Authorizable;

class User extends Eloquent implements AuthenticatableContract, AuthorizableContract
{
    use HasFactory, Authorizable, HasRoles;
    protected  $connection = 'mongodb';
    protected $collection = 'users'; // Change if using a different collection name
    protected $guard_name = 'web';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        'status',
        'level',
        'username',
        'fname',
        'lname',
        'gender',
        'dob',
        'address',
        'province',
        'city',
        'province_city',
        'country',
        'is_admin_user',
        'is_superadmin'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    public function getAuthIdentifierName()
    {
        return '_id'; // MongoDB primary key
    }

    public function getAuthIdentifier()
    {
        return $this->getAttribute('_id'); // Unique identifier
    }

    public function getAuthPassword()
    {
        return $this->password; // Hashed password
    }

    public function getRememberToken()
    {
        return $this->getAttribute('remember_token');
    }

    public function setRememberToken($value)
    {
        $this->setAttribute('remember_token', $value);
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }

}
