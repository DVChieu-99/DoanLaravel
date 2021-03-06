@extends('layout')
@section('main-content')
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Danh sách người chơi</h4>
                                <a href="{{ route('NguoiChoi.them-moi') }}" class="btn btn-primary waves-effect waves-light">Thêm Mới</a>
                                <a href="{{route('NguoiChoi.bin')}}">Danh sách người chơi đã xóa</a>
                                <br>
                                <br>
                                <table id="nguoi-choi-table" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên đăng nhập</th>
                                            <!-- <th>Mật khẩu</th> -->
                                            <th>Email</th>
                                            <th>Ảnh đại diện</th>
                                            <th>Điểm cao nhất </th>
                                            <th>Credit</th>
                                            <th>Sửa | Xóa</th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                        @foreach($listNguoiChoi as $NguoiChoi)
                                       <tr>
                                           <td>{{ $NguoiChoi->id }}</td>
                                           <td>{{ $NguoiChoi->ten_dang_nhap }}</td>
                                           <!-- <td>{{ $NguoiChoi->mat_khau }}</td> -->
                                           <td>{{ $NguoiChoi->mail }}</td>
                                           <td>{{ $NguoiChoi->hinh_dai_dien }}</td>
                                           <td>{{ $NguoiChoi->diem_cao_nhat }}</td>
                                           <td>{{ $NguoiChoi->credit }}</td>
                                           <td>
                                                <a href="{{ route('NguoiChoi.cap-nhat', ['id' => $NguoiChoi->id]) }}" class="btn btn-success btn-rounded waves-effect waves-light"><i class="mdi mdi-pencil-minus"></i></a>
                                                <a onclick="del()" href="#" class="btn btn-outline-danger btn-rounded waves-effect waves-light"><i class="fe-trash-2"></i></a>
                                <script>
                                    function del() {
                                        Swal.fire({
                                            title: 'Bạn có chắc chắn xóa !',
                                            type: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Có',
                                            cancelButtonText: 'không'
                                        }).then((result) => {
                                            if (result.value) {
                                                open("{{route('NguoiChoi.xoa', ['id'=>$NguoiChoi->id])}}", "_self")
                                            }
                                        })
                                    };
                                </script>
                                            </td>
                                        </tr>
                                        @endforeach
                                   </tbody>
                                </table>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->
@endsection
@section('css')
<!-- third party css -->
        <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->
@endsection

@section('js')
<!-- third party js -->
        <script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>
        <script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
        <!-- third party js ends -->

<script type="text/javascript">
    $(document).ready(function(){
        $("#nguoi-choi-table").DataTable({
            language:{paginate:{
                    previous:"<i class='mdi mdi-chevron-left'>",
                    next:"<i class='mdi mdi-chevron-right'>"
                }
            },
            drawCallback:function(){
                $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
            }
        });
    });
</script>

@endsection
