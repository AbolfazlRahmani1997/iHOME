<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class castType extends Model
{
    use HasFactory;

    protected $fillable=[
        'id'
        ,'title'];

    /**
     * return Cost Type
     * @return HasMany
     */
    public function costType():hasMany
    {
        return $this->hasMany(Castable::class,'type_id','id');
    }
}
