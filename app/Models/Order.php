<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['buyer_id', 'product_id', 'version_id', 'amount', 'payment_method', 'transaction_id', 'license_key', 'status'];

    public function buyer()
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function version()
    {
        return $this->belongsTo(ProductVersion::class, 'version_id');
    }

    public function licenseKey()
    {
        return $this->hasOne(LicenseKey::class);
    }

    public function offlinePayment()
    {
        return $this->hasOne(OfflinePayment::class);
    }
}
