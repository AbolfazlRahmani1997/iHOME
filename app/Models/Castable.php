<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Castable extends Model
{
    use HasFactory;

    protected $table='cost';

    protected $fillable=['costable_id'
        ,'costable_type'
        ,'type_id'
        ,'price'];

    /**
     * return Type
     * @return BelongsTo
     */
    public function costType():belongsTo
    {
        return $this->belongsTo(castType::class,'type_id','id');
    }

    public function costable()
    {
        return $this->morphTo();
    }
}
