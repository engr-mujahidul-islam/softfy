<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OfflinePayment extends Model
{
    protected $fillable = ['user_id', 'order_id', 'bank_name', 'account_number', 'payment_receipt', 'status', 'verified_by', 'verified_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function verifier()
    {
        return $this->belongsTo(User::class, 'verified_by');
    }
}
