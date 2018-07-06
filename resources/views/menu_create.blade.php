@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-4 border  border-top-0 border-right-0">
      <div >
        <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Danh mục</a>
    </li>

  </ul>

</br>
<div class="d-flex">
<div class="p-2">
  <div class="btn-group">
  <button type="button" class="btn btn-primary">Thêm</button>
  <button type="button" class="btn btn-warning">Sửa</button>
  <button type="button" class="btn btn-danger">Xóa</button>
  <button type="button" class="btn btn-info">Làm mới</button>
</div>
</div>
</div>
</br>
  eerererer
  eerererer
</br>
      </div>

    </div>

    <div class="col-sm-8 border  border-top-0">
      <div >

        <ul class="nav nav-tabs" role="tablist">

            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#home">Sản phẩm</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menu1">Bài viết</a>
            </li>

  </ul>


</br>

<div class="d-flex">
<div class="p-2">
  <div class="btn-group">
    <button type="button" class="btn btn-primary">Thêm</button>
    <button type="button" class="btn btn-warning">Sửa</button>
    <button type="button" class="btn btn-danger">Xóa</button>
    <button type="button" class="btn btn-info">Làm mới</button>
</div>
</div>
<div class="p-2 ml-auto">
  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Tìm kiếm tên sản phẩm">
    <div class="input-group-append">
      <button class="btn btn-primary" type="submit">Tìm</button>
    </div>
  </div>
</div>
</div>
</br>
  eerererer
  eerererer
</br>
      </div>

    </div>
  </div>


</div>
@endsection
