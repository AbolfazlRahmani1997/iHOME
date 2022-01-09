<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $fillable=[
        'address'
        ,'user_id'
        ,'name'
        ,'id'];

    /**
     * return User
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    /**
     * return Cost Home
     */
    public function cost(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(Castable::class,'costable ','costable_type','costable_id','id');
    }

    public function cells(){
        return $this->hasMany(Cell::class,'home_id','id');
    }

    public function cellRequest(){
        return $this->hasOneThrough(Requests::class, Cell::class,'home_id','cell_id');
    }
}
