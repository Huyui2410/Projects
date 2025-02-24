@extends('admin.chitiethoadon.sidebar')
@section('content')

<div class="content">
                <form action="{{route('chitiethoadon.store')}}" method="POST">
                        {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>ID_HoaDon</label>
                                        <input type="text" class="form-control" name="id_hoadon" placeholder="ID_HoaDon">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                                        <input type="text" name="TenSP" class="form-control" placeholder="Tên Sản Phẩm">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Số Lượng</label>
                                        <input type="text" name="SoLuong" class="form-control" placeholder="Số Lượng">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Giá</label>
                                        <input type="text" name="Gia" class="form-control" placeholder="Giá">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Khuyến Mãi</label>
                                        <input type="text" name="KhuyenMai" class="form-control" placeholder="Khuyến Mãi">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Thành Tiền</label>
                                        <input type="text" name="ThanhTien" class="form-control" placeholder="Thành Tiền">
                                    </div>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                                <button type="submit" class="btn btn-info btn-fill pull-right">Thêm</button>
                        
                </form>
</div>



@stop