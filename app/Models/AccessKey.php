<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

/**
 * @property string $email
 * @property string $job_position
 * @property string $access_key
 * @property integer $user_id
 * Class AccessKey
 * @package App\Models
 */
class AccessKey extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = ['email', 'job_position', 'access_key', 'user_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
