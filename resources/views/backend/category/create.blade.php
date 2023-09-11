@extends('layouts.admin')
@section('title','Thêm danh mục sản phẩm ')
@section('content')

<form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
    @csrf
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm Danh Mục </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Bảng Điều Khiển </a></li>
              <li class="breadcrumb-item active">Thêm Cả Danh Mục  </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
            <div class="row">
              
              
              <div class="col-md-6 text-right">
                <button type="submit" class="btn btn-sm btn-success">
                  <i class="fas fa-save"></i>
                 
                </button>
                <a href="{{route('category.index')}}" class="btn btn-sm btn-info">
                    <i class="fa-solid fa-backward-step">back</i>
                  
                </a>
              </div>
            </div>
        <div class="card-body">
            @includeIf('backend.message_alert')
            <div class="row">
                <div class="col-md-9">
                    <div class="mb-3">
                        <label for="name">Tên Danh Mục </label>
                        <input type="text" name="name" value="{{old('name')}}" id="name" class="form-control" placeholder="nhập tên danh mục ">
                    </div>

                    <div class="mb-3">
                        <label for="metakey">Từ Khóa  </label>
                        <textarea name="metakey" id="metakey" class="form-control" placeholder="nhập từ khóa tìm kiếm ">{{old('metakey')}}</textarea>
                        
                    </div>

                    <div class="mb-3">
                        <label for="metadesc">Mô Tả  </label>
                        <textarea name="metadesc" id="metadesc" class="form-control" placeholder="nhập từ khóa mô tả">{{old('metadesc')}}</textarea>
                        
                    </div>

                    <div class="mb-3">
                        <label for="parent_id">Danh Mục Cha </label>
                        <select class="form-control" id="parent_id" name="parent_id">
                            <option value="0">--Cấp Cha--</option>
                            {!! $html_parent_id !!}
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="sort_order">Vị Trí Sắp xếp  </label>
                        <select class="form-control" id="sort_order" name="sort_order">
                            <option value="0">--Vị trí sắp xếp --</option>
                            {!! $html_sort_order !!}
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="image">Ảnh </label>
                        <input type="file" name="image" value="{{old('image')}}" id="image" class="form-control" placeholder="hinh ảnh  ">
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
</form>
  @endsection