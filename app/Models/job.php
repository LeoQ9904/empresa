<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;
    protected $fillable = ['jobs_id',
    'job_title','min_salary','max_salary'];
    public $timestamps = false;
}
