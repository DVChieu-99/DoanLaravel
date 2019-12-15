@extends('layout')
@section('main-content')
  <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">@if(isset($QuanTriVien)) Cập nhật @else Thêm @endif Quản Trị Viên</h4>
                                @if(isset($QuanTriVien))
                                <form action="{{ route('QuanTriVien.xu-ly-cap-nhat', ['id' =>$QuanTriVien ->id]) }}" method="POST">
                                @else
                                <form action="{{ route('QuanTriVien.xu-ly-them-moi') }}" method="POST">
                                @endif
                                	@csrf

                                    @if(count($errors)>0)
                                    <div class="alert alert-danger">
                                    <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                    </ul>
                                    </div>
                                    @endif

                                    <div class="form-group">
                                        <label for="ten_dang_nhap">Tên</label>
                                        <input type="text" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap" @if(isset($QuanTriVien)) value="{{ $QuanTriVien->ten_dang_nhap}}" @endif>
                                    
                                        <label for="mat_khau">Mật khẩu</label>
                                        <input type="text" class="form-control" id="mat_khau" name="mat_khau" @if(isset($QuanTriVien)) value="{{ $QuanTriVien->mat_khau}}" @endif>
                                    
                                        <label for="ho_ten">Họ và tên</label>
                                        <input type="text" class="form-control" id="ho_ten" name="ho_ten" @if(isset($QuanTriVien)) value="{{ $QuanTriVien->ho_ten}}" @endif>
                                    
                                       
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">@if(isset($QuanTriVien)) Cập nhật @else Thêm @endif</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    <!-- end col -->

  </div>
                <!-- end row -->
@endsection