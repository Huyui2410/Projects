@extends('admin.hoadon.sidebar')
@section('content')

<div class="content">
                    <form action="{{route('hoadon.update',$hoadon->id)}}" method="POST" enctype="multipart/form-data">
                             @csrf
                            @method('PUT')
                            <div class="row">

                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Họ Tên</label>
                                        <input type="text" name="hoten" class="form-control" placeholder="Họ Tên" value="{{$hoadon->hoten}}">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">SĐT</label>
                                        <input type="text" name="sdt" class="form-control" placeholder="SĐT" value="{{$hoadon->sdt}}">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Địa Chỉ</label>
                                        <input type="text" name="diachi" class="form-control" placeholder="Địa Chỉ" value="{{$hoadon->diachi}}">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Thành Tiền</label>
                                        <input type="text" name="thanhtien" class="form-control" placeholder="Thành Tièn" value="{{$hoadon->thanhtien}}">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Trạng Thái</label>
                                        <input type="text" name="trangthai" class="form-control" placeholder="Trạng thái" value="{{$hoadon->trangthai}}">
                                    </div>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                                <button type="submit" class="btn btn-info btn-fill pull-right">Update</button>
                </form>
</div>
@stop