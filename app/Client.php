<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable=array('id_user','nom','prenom','mail','adresse','telephone');
    public function comptes(){
        return $this.hasMany('app\Compte.php');
    }
    public function user(){
        return $this.belongsTo('app\User');
    }
}
