<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BudgetSubType extends Model
{
    use HasFactory;

    protected $table = 'budget_sub_types';

    protected $fillable = [
        'name',
        'max_amount'
    ];

    public function budget_type()
    {
        return $this->belongsTo(BudgetType::class);
    }
}
