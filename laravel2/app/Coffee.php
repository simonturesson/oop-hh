<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Coffee extends Model
{


    public function users(){
        return $this->belongsTo('User');
    }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'coffees';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','name', 'origin', 'roaster', 'producer', 'roast_date', 'brew_date', 'price', 'store', 'brewmethod', 'notes', 'rating', 'created_at', 'image' ];


}
