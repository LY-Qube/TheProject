<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property string $last_name
 * @property string $first_name
 * @property string $gender
 * @property Carbon $birth
 * @property string $address
 * @property string $city
 * @property integer $user_id
 * @property User $user
 * Class Personal
 * @package App\Models
 */
class Personal extends Model
{
    use HasFactory;

    protected $fillable = [
        'last_name',
        'first_name',
        'gender',
        'birth',
        'address',
        'city'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
