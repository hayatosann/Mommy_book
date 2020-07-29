<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Maternity_checkup extends Model
{
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
