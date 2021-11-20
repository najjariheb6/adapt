<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
   
    protected $fillable = ['produit','marque','n°série','description_panne','accesoires_machine','etat_machine','client_id'];
//    protected $hidden =['created_at','updated_at'];
    public function client(){
        return $this->belongsTo('App\Client','client_id');
    }
  
}

