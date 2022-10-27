<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BudgetSubType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'max_amount'
    ];

    public function budget_type()
    {
        return $this->belongsTo(BudgetType::class);
    }
}
