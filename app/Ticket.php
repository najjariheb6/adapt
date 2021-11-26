<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Client;
class Ticket extends Model
{
   
    protected $fillable = ['produit','marque','n°série','mode','description_panne','accesoires_machine','etat_machine','client_id','references'];
//    protected $hidden =['created_at','updated_at'];
    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function intervention()
    {
        return $this->hasMany(Intervention::class);
    }
  
}

