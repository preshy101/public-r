<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Panel;
use Filament\Models\Contracts\FilamentUser;  
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\softDeletes; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements FilamentUser
{
    use softDeletes;
    use HasApiTokens, HasFactory, Notifiable; 
    use Notifiable;  

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     const ROLE_SUPER_ADMIN = 'SUPER_ADMIN';
     const ROLE_ADMIN = 'ADMIN';
     const ROLE_EDITOR = 'EDITOR';
     const ROLE_USER = 'USER';
 
     const ROLE_DEFAULT = self::ROLE_EDITOR;
 
    const ROLES =[
    self::ROLE_ADMIN => 'Admin',
    self::ROLE_SUPER_ADMIN => 'Super_admin',
    self::ROLE_EDITOR => 'Editor',
    self::ROLE_USER => 'User',
    ];

    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    public function canAccessPanel(Panel $panel): bool
    {
        // return str_ends_with($this->email, '@yourdomain.com') && $this->hasVerifiedEmail();
        return $this->role === self::ROLE_ADMIN || $this->role === self::ROLE_SUPER_ADMIN || $this->role === self::ROLE_EDITOR;
    }

    public function isAdmin()
    {
       return $this->role === self::ROLE_ADMIN;
    }

    public function isSuper_admin()
    {
       return $this->role === self::ROLE_SUPER_ADMIN;
    }

    public function isEditor()
    {
       return $this->role === self::ROLE_EDITOR;
    }

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
        'password' => 'hashed',
    ];
}
