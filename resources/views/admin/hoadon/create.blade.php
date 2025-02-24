@extends('admin.hoadon.sidebar')
@section('content')

<div class="content">
                <form action="{{route('hoadon.store')}}" method="POST">
                        {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>User_ID</label>
                                        <input type="text" class="form-control" name="user_id" placeholder="User_ID">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Họ Tên</label>
                                        <input type="text" name="hoten" class="form-control" placeholder="Họ Tên">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">SĐT</label>
                                        <input type="text" name="sdt" class="form-control" placeholder="SĐT">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Địa Chỉ</label>
                                        <input type="text" name="diachi" class="form-control" placeholder="Địa Chỉ">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Thành Tiền</label>
                                        <input type="text" name="thanhtien" class="form-control" placeholder="Thành Tièn">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Trạng Thái</label>
                                        <input type="text" name="trangthai" class="form-control" placeholder="Trạng thái">
                                    </div>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                                <button type="submit" class="btn btn-info btn-fill pull-right">Thêm</button>
                </form>
</div>



@stop