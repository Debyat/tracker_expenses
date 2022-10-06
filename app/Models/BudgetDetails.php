<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BudgetDetails extends Model
{
    use HasFactory;

    protected $table = 'budget_details';

    protected $fillable = [
        'percentage',
        'amount',
        'quantity',
        'subtotal',
        'balance'
    ];

    public function budget()
    {
        return $this->belongsTo(Budget::class);
    }

    public function budget_type()
    {
        return $this->belongsTo(BudgetType::class);
    }

    public function budget_sub_type()
    {
        return $this->belongsTo(BudgetSubType::class);
    }
}
