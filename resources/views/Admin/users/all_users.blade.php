@extends('admin.layouts.admin')
@section('title')
<title>Trang chủ</title>
@endsection

@section('content')
<div id="quanlysp" class="tab-content-item"> 
             <h3>
                <i class="fa-solid fa-arrow-right"></i>
                Quản lý khách hàng
            </h3>
            <button style="padding:10px;color: red" onclick="showcart()"><a href="{{route('addKH')}}" style="text-decoration: none;">Thêm</a></button>
            @if(session('success'))
				<div class="alert alert-success">
					{{ session('success') }}
				</div>
			@endif
            <table class="tbl-main">
                <thead>
                <tr class="tr1">
                    <th>STT</th>
                    <th>Tên user</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Số điện thoại</th>
                    <th>Author</th>
                    <th>Admin</th>
                    <th>User</th>
                    <th>Xem</th>
                </tr>
                </thead>
                <tbody>
                @php $i = 1; @endphp
				@foreach($admin as $admin_info)
				<form action="{{URL::to('/assign_roles')}}" method="post">
                    @csrf
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $admin_info->name }}</td>
                        <td>
                            {{ $admin_info->email }}
                            <input type="hidden" name="email" value="{{$admin_info->email}}">
                        </td>
                        <td>{{ $admin_info->password }}</td>
                        <td>{{ $admin_info->phone }}</td>
                        <td><input type="checkbox" name="author_role" {{ $admin_info->hasRole('author') ? 'checked' : '' }}></td>
                        <td><input type="checkbox" name="admin_role" {{ $admin_info->hasRole('admin') ? 'checked' : '' }}></td>
                        <td><input type="checkbox" name="user_role" {{ $admin_info->hasRole('user') ? 'checked' : '' }}></td>
                        <td>
                            <input type="submit" value="Assign Role">
                        </td>
                    </tr>
                </form>
				@endforeach
                </tbody>
            </table>
            {{ $admin->links('pagination::bootstrap-4') }}
           
        </div>
@endsection