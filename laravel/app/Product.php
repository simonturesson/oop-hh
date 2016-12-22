<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Product extends Model
{


    public function users(){
        return $this->belongsTo('User');
    }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'rating'];


}
