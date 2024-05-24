<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportInvoiceDetailModel extends Model
{
    use HasFactory;
    protected $table = 'cthoadonnhap';
    protected $primaryKey = 'idCTHoaDonNhap';
    public $timestamps = true; // Nếu bảng chứa cột created_at và updated_at(TRUE) và không (FALSE)
    protected $fillable = [
        'idCTHoaDonNhap',
        'idHoaDonNhap',
        'idSanPham',
        'tenSanPham',
        'soLuong',
        'giaNhap',
        'thanhTien',
        'Status'
    ];
}
