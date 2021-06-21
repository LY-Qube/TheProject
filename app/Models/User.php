<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property string $name
 * @property string $avatar
 * @property string $job_position
 * @property string $email
 * @property string $password
 * @property boolean $is_admin
 * @property integer $creator_id
 * @property User $creator
 * Class User
 * @package App\Models
 */

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'job_position',
        'avatar',
        'email',
        'password',
        'is_admin',
        'creator_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function added(): HasMany
    {
        return $this->hasMany(User::class, 'creator_id');
    }

    public function personal(): HasOne
    {
        return $this->hasOne(Personal::class);
    }

}
