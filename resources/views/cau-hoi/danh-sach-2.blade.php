@extends('layout')

@section('css')
<!-- Responsive Table css -->
    <link href="{{ asset('assets/libs/rwd-table/rwd-table.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('js')

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

    <!-- Responsive Table js -->
    <script src="{{ asset('assets/libs/rwd-table/rwd-table.min.js') }}"></script>

    <!-- App js-->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
@endsection

@section('main-content')
<div class="col-12">
    <div class="card-box">
        <div class="responsive-table-plugin">
            <div class="table-wrapper">
               
                <div class="table-rep-plugin fixed-solution" data-pattern="priority-columns">
                    <div class="table-responsive" data-pattern="priority-columns">
                    <h4 class="header-title">Danh sách câu hỏi</h4>
                                <a href="{{ route('cau-hoi.them-moi') }}" class="btn btn-primary waves-effect waves-light">Thêm Mới</a>  
                                <br>
                                <br>
                        <table id="tech-companies-1" class="table table-striped">
                            <thead>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nội dung</th>
                                        <th>Lĩnh vực</th>
                                        <th>Phương án A</th>
                                        <th>Phương án B</th>
                                        <th>Phương án C</th>
                                        <th>Phương án D</th>
                                        <th>Đáp án</th>
                                        <th>Sửa | Xóa</th>
                                    </tr>
                                </thead>  
                            </thead>
                            <tbody>
                            @foreach($listCauHois as $cauHoi)
                            <tr>
                                <td data-org-colspan="1" data-columns="tech-companies-1-col-0">{{ $cauHoi->id }}</th>
                                <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-1" colspan="1">{{ $cauHoi->noi_dung }}</td>
                                <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-2" colspan="1">{{ $cauHoi->linhVuc->ten_linh_vuc }}</td>
                                <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-3" colspan="1">{{ $cauHoi->phuong_an_a }}</td>
                                <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-4" colspan="1">{{ $cauHoi->phuong_an_b }}</td>
                                <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-5" colspan="1">{{ $cauHoi->phuong_an_c }}</td>
                                <td data-org-colspan="1" data-priority="6" data-columns="tech-companies-1-col-6" colspan="1">{{ $cauHoi->phuong_an_d }}</td>
                                <td data-org-colspan="1" data-priority="6" data-columns="tech-companies-1-col-7" colspan="1">{{ $cauHoi->dap_an }}</td>
                                <td data-org-colspan="1" data-priority="6" data-columns="tech-companies-1-col-8" colspan="1">
                                    <a href="{{ route('cau-hoi.cap-nhat', ['id' => $cauHoi->id]) }}" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-pencil-minus"></i></a>
                                    <a href="{{ route('cau-hoi.xoa', ['id' => $cauHoi->id]) }}" onclick="return confirm('Bạn có chắc muốn xóa')" class="btn btn-danger waves-effect waves-light"><i class=" mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- end .table-responsive -->
                </div>
            </div>
            <!-- end .table-rep-plugin-->
        </div>
        <!-- end .responsive-table-plugin-->
    </div>
    <!-- end card-box -->
</div>
@endsection
