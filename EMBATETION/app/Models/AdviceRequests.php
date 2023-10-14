<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdviceRequests extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'advice_requests';
}
