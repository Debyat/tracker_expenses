<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;

    protected $fillable = [
        'basic_salary',
        'extra',
        'total_salary',
        'start_date',
        'end_date'
    ];

    public function expenses()
    {
        return $this->hasMany(Expenses::class);
    }

    public function budget_details()
    {
        return $this->hasMany(BudgetDetails::class);
    }
}
