@extends('admin.loaisanpham.sidebar')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Loại Sản Phẩm
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{route('loaisanpham.create')}}" class="btn btn-success">Thêm mới</a>
                                </div>
                            </h4>
                        </div>
                        <div class="panel-body">
                            <div class="bootstrap-table">
                                <table>

                                    <tr>
                                        <th> Tên Loại</th>
                                        <th> Trạng Thái</th>
                                        <th>Tùy chọn</th>
                                    </tr>


                                    @foreach($cate ??'' as $cates)
                                        <tr>
                                        <form action="{{route('loaisanpham.destroy', $cates->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                            <td style="text-align:center">{{$cates->tenloai}}</td>
                                            <td style="text-align:center">{{$cates->trangthai}}</td>
                                            <td><a href="{{route('loaisanpham.edit', $cates->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                            @if($cates->trangthai==1)
                                                <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn hủy?')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                @else
                                                <button type="submit" onclick="return confirm('Bạn có muốn khôi phục?')" class="btn btn-success"><i class="fa fa-trash"></i></button>
                                                @endif
                                            </td>
                                            </form>
                                        </tr>
                                    @endforeach


                                </table>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



 @stop
