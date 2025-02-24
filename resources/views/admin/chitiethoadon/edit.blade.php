@extends('admin.chitiethoadon.sidebar')
@section('content')

<div class="content">
                    <form action="{{route('chitiethoadon.update',$chitiethoadon->id)}}" method="POST" enctype="multipart/form-data">
                             @csrf
                            @method('PUT')
                            <div class="row">

                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                                        <input type="text" name="TenSP" class="form-control" placeholder="Tên Sản Phẩm" value="{{$chitiethoadon->TenSP}}">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Số Lượng</label>
                                        <input type="text" name="SoLuong" class="form-control" placeholder="Số Lượng" value="{{$chitiethoadon->SoLuong}}">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Giá</label>
                                        <input type="text" name="Gia" class="form-control" placeholder="Giá" value="{{$chitiethoadon->Gia}}">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Khuyến Mãi</label>
                                        <input type="text" name="KhuyenMai" class="form-control" placeholder="Khuyến Mãi" value="{{$chitiethoadon->KhuyenMai}}">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Thành Tiền</label>
                                        <input type="text" name="ThanhTien" class="form-control" placeholder="Thành Tiền" value="{{$chitiethoadon->ThanhTien}}">
                                    </div>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                                <button type="submit" class="btn btn-info btn-fill pull-right">Update</button>
                </form>
</div>
@stop