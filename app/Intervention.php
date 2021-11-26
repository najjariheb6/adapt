<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    public function client(){
        return $this->belongsTo(Ticket::class);
    }
}
