<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ticket;
class Client extends Model
{
    protected $fillable = ['nom_client','numero_tel','email_client','adress_client',];

   public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
