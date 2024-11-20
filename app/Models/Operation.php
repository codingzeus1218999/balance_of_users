<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    protected $fillable = ['amount', 'description', 'operation_date', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
