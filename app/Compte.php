<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $fillable=array('id_client','id_user','numero','solde','dateCreation');
    public static $rules=array('id_client'=>'required|integer',
                                'user'=>'required|integer',
                                'solde'=>'required',
                                'numero'=>'required|max:9');
    public function clients(){
        return $this.belongsTo('app\Client');
    }
    public function user(){
        return $this.belongsTo('app\User');
    }
}
