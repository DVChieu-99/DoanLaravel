@extends('layout')
@section('main-content')
  <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">@if(isset($LuotChoi)) Cập nhật @else Thêm @endif Lượt chơi</h4>
                                @if(isset($LuotChoi))
                                <form action="{{ route('LuotChoi.xu-ly-cap-nhat', ['id' =>$LuotChoi ->id]) }}" method="POST">
                                @else
                                <form action="{{ route('LuotChoi.xu-ly-them-moi') }}" method="POST">
                                @endif
                                	@csrf
                                    <div class="form-group">
                                        <label for="nguoi_choi_id">Người chơi ID</label>
                                        <input type="text" class="form-control" id="nguoi_choi_id" name="nguoi_choi_id" @if(isset($LuotChoi)) value="{{ $LuotChoi->nguoi_choi_id}}" @endif>
                                        <br>
                                        <label for="so_cau">Số câu</label>
                                        <input type="text" class="form-control" id="so_cau" name="so_cau" @if(isset($LuotChoi)) value="{{ $LuotChoi->so_cau}}" @endif>
                                        <br>
                                        <label for="diem">Điểm</label>
                                        <input type="text" class="form-control" id="diem" name="diem" @if(isset($LuotChoi)) value="{{ $LuotChoi->diem}}" @endif>
                                    
                                        <br>
                                        <label for="ngay_gio">Ngày Giờ</label>
                                        <input type="text" class="form-control" id="ngay_gio" name="ngay_gio" @if(isset($LuotChoi)) value="{{ $LuotChoi->ngay_gio}}" @endif>
                                        
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">@if(isset($LuotChoi)) Cập nhật @else Thêm @endif</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    <!-- end col -->

  </div>
                <!-- end row -->
@endsection