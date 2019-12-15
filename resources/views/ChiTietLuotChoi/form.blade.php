@extends('layout')
@section('main-content')
  <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">@if(isset($ChiTietLuotChoi)) Cập nhật @else Thêm @endif Chi Tiết Lượt chơi</h4>
                                @if(isset($ChiTietLuotChoi))
                                <form action="{{ route('ChiTietLuotChoi.xu-ly-cap-nhat', ['id' =>$ChiTietLuotChoi ->id]) }}" method="POST">
                                @else
                                <form action="{{ route('ChiTietLuotChoi.xu-ly-them-moi') }}" method="POST">
                                @endif
                                	@csrf
                                    <div class="form-group">
                                        <label for="luot_choi_id">Lượt chơi ID</label>
                                        <input type="text" class="form-control" id="luot_choi_id" name="luot_choi_id" @if(isset($ChiTietLuotChoi)) value="{{ $ChiTietLuotChoi->luot_choi_id}}" @endif>
                                        <br>
                                        <label for="cau_hoi_id">Câu hỏi ID</label>
                                        <input type="text" class="form-control" id="cau_hoi_id" name="cau_hoi_id" @if(isset($ChiTietLuotChoi)) value="{{ $ChiTietLuotChoi->cau_hoi_id}}" @endif>
                                        <br>
                                        <label for="phuong_an">Phương án</label>
                                        <input type="text" class="form-control" id="phuong_an" name="phuong_an" @if(isset($ChiTietLuotChoi)) value="{{ $ChiTietLuotChoi->phuong_an}}" @endif>
                                    
                                        <br>
                                        <label for="diem">Điểm</label>
                                        <input type="text" class="form-control" id="diem" name="diem" @if(isset($ChiTietLuotChoi)) value="{{ $ChiTietLuotChoi->diem}}" @endif>
                                        
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