<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BudgetType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'percentage',
        'total'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function budget_details()
    {
        return $this->hasMany(BudgetDetails::class);
    }

    public function budget_sub_type()
    {
        return $this->hasMany(BudgetSubType::class);
    }
}
