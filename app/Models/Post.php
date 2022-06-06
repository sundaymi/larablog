<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\User;

class Post extends Model
{
    public function user(){
        return $this->belongsTo('User'); 
        // για να μην γινεται μπερδεμα με τα paths ενας τροπος ειναι αυτος του απευθειας \App\User
    }
    
}
