<?php

namespace App;

use App\Traits\BelongsToTenant;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Document
 *
 * @property int $id
 * @property string $type
 * @property int $user_id
 * @property string $filename
 * @property string $extension
 * @property int $size
 * @property int $tenant_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Tenant $tenant
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Document newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Document newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Document query()
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereExtension($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereFilename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereTenantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereUserId($value)
 * @mixin \Eloquent
 */
class Document extends Model
{
    use BelongsToTenant;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function privateUrl()
    {
        return url('/documents/' . $this->user_id . '/' . $this->filename);
    }
}
