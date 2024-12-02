<?php

namespace App\Models;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //Relationships
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
