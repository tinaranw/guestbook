<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable= [
        'title',
        'description',
        'status',
        'statcreated_byus',
        'noa',
        'event_date',
    ];

    public function creator(){
        $this->belongsTo(User::class, 'created_by', 'id');
    }
}
