@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">{{ __('Tạo chỉ mục') }}</div>
      <div class="card-body">
        <form method="post" action="/cm">
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
          <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tên chỉ mục :') }}</label>
              <div class="col-md-6">
                  <input name="name1" id="name" type="text" class="form-control">
              </div>
          </div>
          <div class="form-group row">
              <label for="nameurl2" class="col-md-4 col-form-label text-md-right">{{ __('Tên không dấu :') }}</label>
              <div class="col-md-6">
                  <input name="nameurl" id="nameurl" type="text" class="form-control" >
              </div>
          </div>
          <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                      {{ __('Tạo chỉ mục') }}
                  </button>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

</div>
@endsection
