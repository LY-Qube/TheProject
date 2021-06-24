<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany as BelongsToManyAlias;

/**
 * @property string $role
 * Class Role
 * @package App\Models
 */
class Role extends Model
{
    use HasFactory;

    protected $fillable = ['role'];

    public $timestamps = false;

    public function users(): BelongsToManyAlias
    {
        return $this->belongsToMany(User::class);
    }

}
