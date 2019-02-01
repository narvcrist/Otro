<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Gender extends Model 
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description',
    ];
    function gender(){
        return $this->belongsTo('App\User');
    }
}