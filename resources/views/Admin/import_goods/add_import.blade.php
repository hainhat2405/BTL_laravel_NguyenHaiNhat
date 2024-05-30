@extends('admin.layouts.admin')
@section('title')
<title>Trang chủ</title>
<style>
    .product-container {
        margin-bottom: 20px;
        width: 100%;
        height: 600px;
        border: 1px solid black;
        margin-top: 10px;
    }
    .product-container h3{
        text-align:center;
    }
</style>
@endsection

@section('content')

<button id="addProductButton">Thêm 1 sản phẩm</button>
<form action="{{ route('storeWH') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div id="productContainer">
        <div class="product-container">
            <h3>Sản phẩm 1</h3>
            <input type="hidden" name="editvalue[]">
            <div class="add_info">
                <h4>Tên sản phẩm</h4>
                <input type="text" name="tenSanPham[]" id="tenSanPham">
            </div>
            <div class="add_info">
                <h4>Tên loại sản phẩm </h4>
                <select name="idLoaiSP[]" id="idLoaiSP">
                    @foreach($lsp as $lspItem)
                    <option value="{{ $lspItem->idLoaiSP }}" name="idLoaiSP" id="idLoaiSP">{{ $lspItem->tenLoaiSP }}</option>
                    @endforeach
                </select>
            </div>
            <div class="add_info">
                <h4>Nhà cung cấp</h4>
                <select name="idNhaCungCap[]" id="idNhaCungCap">
                @foreach($ncc as $nccItem)
                    <option value="{{ $nccItem->idNhaCungCap}}" name="idNhaCungCap" id="idNhaCungCap">{{ $nccItem->tenNhaCungCap }}</option>
                @endforeach
                </select>
            </div>
            <div class="add_info">
                <h4>Status</h4>
                <select name="Status[]" id="Status">
                    <option value="0" name="Status" id="Status">0</option>
                    <option value="1" name="Status" id="Status">1</option>
                </select>
            </div>
            <div class="add_info">
                <h4>Hình ảnh</h4>
                <input type="file" name="hinhAnh[]" id="hinhAnh">
            </div>
            <div class="add_info">
                <h4>Số lượng</h4>
                <input type="text" name="soLuong[]" id="soLuong">
            </div>
            <div class="add_info">
                <h4>Giá bán</h4>
                <input type="text" name="giaBan[]" id="giaBan">
            </div>
            <div class="add_info">
                <h4>Giá nhập</h4>
                <input type="text" name="giaNhap[]" id="giaNhap">
            </div>
            
            <div class="add_info">
                <h4>Đơn vị tính</h4>
                <select name="donViTinh[]" id="donViTinh">
                    <option  name="donViTinh" id="donViTinh">Hộp</option>
                    <option  name="donViTinh" id="donViTinh">Thùng</option>
                    <option  name="donViTinh" id="donViTinh">Gói</option>
                </select>
            </div>
            <div class="add_info">
                <h4>Ngày nhập</h4>
                <input type="date" name="ngayNhap[]" id="ngayNhap">
            </div>
            <div class="add_info_mota">
                <h4>Mô tả sản phẩm</h4>
                <textarea name="moTa[]" id="moTa" cols="148" rows="5"></textarea>
            </div>
        </div>
    </div>
    <div class="btn_info">
        <div class="btn_add">
            <input type="submit" value="Thêm">
        </div>
        <div class="btn_exit">
            <a href="{{ route('indexSP') }}">Cancel</a>
        </div>
    </div>
</form>

<script>
    document.getElementById('addProductButton').addEventListener('click', function() {
        // Lấy container chứa sản phẩm
        const container = document.getElementById('productContainer');
        
        // Đếm số sản phẩm hiện có để đặt tên cho sản phẩm mới
        const productCount = container.getElementsByClassName('product-container').length + 1;
        
        // Tạo một div mới với nội dung yêu cầu
        const newProductDiv = document.createElement('div');
        newProductDiv.className = 'product-container';
        newProductDiv.innerHTML = `
            <h3>Sản phẩm ${productCount}</h3>
            <input type="hidden" name="editvalue[]">
            <div class="add_info">
                <h4>Tên sản phẩm</h4>
                <input type="text" name="tenSanPham[]" id="tenSanPham">
            </div>
            <div class="add_info">
                <h4>Tên loại sản phẩm </h4>
                <select name="idLoaiSP[]" id="idLoaiSP">
                    @foreach($lsp as $lspItem)
                    <option value="{{ $lspItem->idLoaiSP }}" name="idLoaiSP" id="idLoaiSP">{{ $lspItem->tenLoaiSP }}</option>
                    @endforeach
                </select>
            </div>
            <div class="add_info">
                <h4>Tên nhà cung cấp </h4>
                <select name="idNhaCungCap[]" id="idNhaCungCap">
                    @foreach($ncc as $nccItem)
                    <option value="{{ $nccItem->idNhaCungCap }}" name="idNhaCungCap" id="idNhaCungCap">{{ $nccItem->tenNhaCungCap }}</option>
                    @endforeach
                </select>
            </div>
            </div>
            <div class="add_info">
                <h4>Status</h4>
                <select name="Status[]" id="Status">
                    <option value="0" name="Status" id="Status">0</option>
                    <option value="1" name="Status" id="Status">1</option>
                </select>
            </div>
            <div class="add_info">
                <h4>Hình ảnh</h4>
                <input type="file" name="hinhAnh[]" id="hinhAnh">
            </div>
            <div class="add_info">
                <h4>Số lượng</h4>
                <input type="text" name="soLuong[]" id="soLuong">
            </div>
            <div class="add_info">
                <h4>Giá bán</h4>
                <input type="text" name="giaBan[]" id="giaBan">
            </div>
            <div class="add_info">
                <h4>Giá nhập</h4>
                <input type="text" name="giaNhap[]" id="giaNhap">
            </div>
            
            <div class="add_info">
                <h4>Đơn vị tính</h4>
                <select name="donViTinh[]" id="donViTinh">
                    <option  name="donViTinh" id="donViTinh">Hộp</option>
                    <option  name="donViTinh" id="donViTinh">Thùng</option>
                    <option  name="donViTinh" id="donViTinh">Gói</option>
                </select>
            </div>
            <div class="add_info">
                <h4>Ngày nhập</h4>
                <input type="date" name="ngayNhap[]" id="ngayNhap">
            </div>
            <div class="add_info_mota">
                <h4>Mô tả sản phẩm</h4>
                <textarea name="moTa[]" id="moTa" cols="148" rows="5"></textarea>
            </div>
        `;
        
        // Thêm div mới vào container
        container.appendChild(newProductDiv);
    });
</script>

@endsection
