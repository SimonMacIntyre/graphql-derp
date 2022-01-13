<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\Hat
 *
 * @property-read User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Hat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hat query()
 * @mixin Eloquent
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Hat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hat whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hat whereUpdatedAt($value)
 */
class Hat extends Model
{
    use HasFactory;

    protected $fillable = [
      'name'
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
