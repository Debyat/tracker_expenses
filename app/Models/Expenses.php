<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    use HasFactory;

    protected $table = 'expenses';

    protected $fillable = [
        'name',
        'amount',
        'quantity',
        'total',
        'details',
        'date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function buget()
    {
        return $this->belongsTo(Budget::class);
    }
}
