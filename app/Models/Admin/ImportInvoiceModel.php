<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportInvoiceModel extends Model
{
    use HasFactory;
    protected $table = 'hoadonnhap';
    protected $primaryKey = 'idHoaDonNhap';
    public $timestamps = true; // Nếu bảng chứa cột created_at và updated_at(TRUE) và không (FALSE)
    protected $fillable = [
        'idHoaDonNhap',
        'idNhaCungCap',
        'ngayNhap',
        'tongTien',
        'Status'
    ];
}
