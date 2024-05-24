<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WareHouseModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_warehouse';
    protected $primaryKey = 'idWH';
    public $timestamps = true; // Nếu bảng chứa cột created_at và updated_at(TRUE) và không (FALSE)
    protected $fillable = [
        'idWH',
        'idSanPham',
        'tenSanPham',
        'moTa',
        'tenLoaiSP',
        'tenNhaCungCap',
        'giaNhap',
        'giaBan',
        'soLuongTon',
        'dvTinh',
        'hinhAnh',
        'ngayNhap',
        'soLuongNhap',
        'ngayXuat',
        'soLuongXuat',
        'ngayXuat',
    ];
}
