<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cell extends Model
{
    use HasFactory;

    /**
     * return Attribute
     * @var string[]
     */
    protected $fillable=[
        'id',
        'home_id',
        'user_id',
        'unit_number'
    ];


    /**
     * return User Has this Cell
     * @return BelongsTo
     */
    public function user():belongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    /**
     * return Home
     */
    public function home():belongsTo
    {
        return $this->belongsTo(Home::class,'home_to','id');
    }

    public function cost()
    {
        return $this->morphMany(Castable::class,'costable','costable_type','costable_id','id');
    }
    public function requests(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Cell::class,'cell_id','id');
    }
}
