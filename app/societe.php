<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class societe extends Model
{
    protected $guarded = [] ;
    public function etudiant()
    {
       return  $this->hasMany('App\etudiant');
       
    }
    public function stage()
    {
        return $this->hasMany('App\stage');
    }
    public function user()
    {
        $this->belongsTo('App\User');
    }
}
