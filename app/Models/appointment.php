<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'url_meet',
        'dateOfMeet'
    ];


    public function client()
    {
        return $this->belongsTo(client::class);
    }


}

