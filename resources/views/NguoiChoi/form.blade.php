@extends('layout')
@section('main-content')
  <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">@if(isset($NguoiChoi)) Cập nhật @else Thêm @endif Người chơi</h4>
                                @if(isset($NguoiChoi))
                                <form action="{{ route('NguoiChoi.xu-ly-cap-nhat', ['id' =>$NguoiChoi ->id]) }}" method="POST">
                                @else
                                <form action="{{ route('NguoiChoi.xu-ly-them-moi') }}" method="POST">
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
                                        <label for="ten_dang_nhap">Tên đăng nhập</label>
                                        <input type="text" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap" @if(isset($NguoiChoi)) value="{{ $NguoiChoi->ten_dang_nhap}}" @endif>
                                        <br>
                                        <label for="mat_khau">Mật khẩu</label>
                                        <input type="text" class="form-control" id="mat_khau" name="mat_khau" @if(isset($NguoiChoi)) value="{{ $NguoiChoi->mat_khau}}" @endif>
                                        <br>
                                        <label for="mail">Email</label>
                                        <input type="text" class="form-control" id="mail" name="mail" @if(isset($NguoiChoi)) value="{{ $NguoiChoi->mail}}" @endif>
                                    
                                        <br>
                                        <label for="example-fileinput">Ảnh đại diện</label>
                                        <input type="file" class="form-control-file" id="hinh_dai_dien" name="hinh_dai_dien" @if(isset($NguoiChoi)) value="{{ $NguoiChoi->hinh_dai_dien}}" @endif>
<!--                                     
                                        <label for="example-fileinput">Default file input</label>
                                                <input type="file" id="example-fileinput" class="form-control-file"> -->
                                        <br>
                                        <label for="diem_cao_nhat">Điểm cao nhất </label>
                                        <input type="text" class="form-control" id="diem_cao_nhat" name="diem_cao_nhat" @if(isset($NguoiChoi)) value="{{ $NguoiChoi->diem_cao_nhat}}" @endif>
                                        <br>    
                                        <label for="credit">Creadit</label>
                                        <input type="text" class="form-control" id="credit" name="credit" @if(isset($NguoiChoi)) value="{{ $NguoiChoi->credit}}" @endif>
                                    
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">@if(isset($NguoiChoi)) Cập nhật @else Thêm @endif</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    <!-- end col -->

  </div>
                <!-- end row -->
@endsection