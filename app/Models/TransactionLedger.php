<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionLedger extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'transaction_id',
        'user_id',
        'type',
        'amount',
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
