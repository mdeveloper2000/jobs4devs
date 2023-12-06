<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    
    use HasFactory;

    protected $fillable = [
        'user_id', 'title', 'company', 'city', 'time', 'contract', 'email', 'website', 'description', 'tags'
    ];

    public function list() {
        return Job::all();
    }

    public function users() {
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
