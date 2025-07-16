<?php

// app/Models/OfflinePaymentRequest.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OfflinePaymentRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'bank_name',
        'transaction_id',
        'amount',
        'note',
        'attachment',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

