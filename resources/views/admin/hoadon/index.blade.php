
@extends('admin.hoadon.sidebar')
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><b>Hóa Đơn</b></h4>
                            <br>
                            <a href="{{route('hoadon.create')}}" class="btn btn-success">Thêm mới</a>
                            <br><br>
                        </div>
                        <div class="panel-body">
                            <div class="bootstrap-table">
                                <table>            
                                    <tr class="">
                                        <th > ID</th>
                                        
                                        <th style="text-align:center" width="5%">User_ID</th>
                                        <th style="text-align:center" width="20%">Họ Tên</th>
                                        <th style="text-align:center" width="10%">SĐT</th>
                                        <th style="text-align:center" width="20%">Địa Chỉ</th>
                                        <th style="text-align:center" width="15%">Thành Tiền</th>
                                        <th style="text-align:center" width="10%"> Trạng Thái</th>
    
                                        <th style="text-align:center" width="20%">Tùy chọn</th>
                                    </tr>
                                  @foreach($hoadons ?? '' as $hoadon)
								<tr >
                                    <th style="text-align:center">{{$hoadon->id}}</th>
                                    <th style="text-align:center">{{$hoadon->user_id}}</th>
                                    <th style="text-align:center">{{$hoadon->hoten}}</th>
                                    <th style="text-align:center">{{$hoadon->sdt}}</th>
                                    <th style="text-align:center">{{$hoadon->diachi}}</th>
                                    <th style="text-align:center">{{$hoadon->thanhtien}}</th>
                                    <th style="text-align:center">{{$hoadon->trangthai}}</th>
                        
                                    <td>
                                    <form action="{{route('hoadon.destroy', $hoadon->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                <a href="{{route('hoadon.edit',$hoadon->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                                                @if($hoadon->trangthai=='Đã đặt')
                                                <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn hủy?')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                @else
                                                <button type="submit" onclick="return confirm('Bạn có muốn khôi phục?')" class="btn btn-success"><i class="fa fa-trash"></i></button>
                                                @endif
                                    </td>
                                            </form>
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