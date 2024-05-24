<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_payment';
    protected $primaryKey = 'payment_id';
    public $timestamps = true; // Nếu bảng chứa cột created_at và updated_at(TRUE) và không (FALSE)
    protected $fillable = [
        'payment_id',
        'payment_method',
        'payment_status'
    ];
}
