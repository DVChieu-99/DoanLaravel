@extends('layout')
@section('main-content')
  <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">@if(isset($CauHinhApp)) Cập nhật @else Thêm @endif Cấu Hình App</h4>
                                @if(isset($CauHinhApp))
                                <form action="{{ route('CauHinhApp.xu-ly-cap-nhat', ['id' =>$CauHinhApp ->id]) }}" method="POST">
                                @else
                                <form action="{{ route('CauHinhApp.xu-ly-them-moi') }}" method="POST">
                                @endif
                                	@csrf
                                    <div class="form-group">
                                        <label for="cau_hoi_sai">Câu hỏi sai</label>
                                        <input type="text" class="form-control" id="cau_hoi_sai" name="cau_hoi_sai" @if(isset($NguoiChoi)) value="{{ $NguoiChoi->ten_dang_nhap}}" @endif>
                                        <br>
                                        <label for="thoi_gian_tra_loi_sai">Thời gian trả lời sai</label>
                                        <input type="text" class="form-control" id="thoi_gian_tra_loi_sai" name="thoi_gian_tra_loi_sai" @if(isset($NguoiChoi)) value="{{ $NguoiChoi->mat_khau}}" @endif>
                                        
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">@if(isset($CauHinhApp)) Cập nhật @else Thêm @endif</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    <!-- end col -->

  </div>
                <!-- end row -->
@endsection