<?php

namespace App;

use App\Traits\BelongsToTenant;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Login
 *
 * @property int $id
 * @property int $user_id
 * @property int $tenant_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Tenant $tenant
 * @method static \Illuminate\Database\Eloquent\Builder|Login newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Login newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Login query()
 * @method static \Illuminate\Database\Eloquent\Builder|Login whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Login whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Login whereTenantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Login whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Login whereUserId($value)
 * @mixin \Eloquent
 */
class Login extends Model
{
    use BelongsToTenant;

    protected $guarded = [];
}
