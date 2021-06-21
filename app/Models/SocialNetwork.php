<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property string $fb
 * @property string $tw
 * @property string $github
 * @property string $youtube
 * @property string $linkedin
 * @property integer $user_id
 * @property User $user
 * Class SocialNetwork
 * @package App\Models
 */
class SocialNetwork extends Model
{
    use HasFactory;

    protected $fillable = [
        'fb',
        'tw',
        'github',
        'youtube',
        'linkedin',
        'user_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
