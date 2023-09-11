@extends('layouts.admin')
@section('title','Tất cả danh mục sản phẩm ')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tất Cả Danh Mục </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Bảng Điều Khiển </a></li>
              <li class="breadcrumb-item active">Tất Cả Danh Mục  </li>
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
              <div class="col-md-6">
                <button class="btn btn-sm btn-danger" type="submit"><i class="fas fa-calendar-times"></i></button>
              </div>
              
              <div class="col-md-6 text-right">
                <a href="{{route('category.create')}}" class="btn btn-sm btn-success">
                  <i class="fas fa-plus"></i>
                 
                </a>
                <a href="" class="btn btn-sm btn-danger">
                  <i class="fas fa-trash"></i>
                  
                </a>
              </div>
            </div>
        <div class="card-body">
          @include('backend.message_alert')
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width:20px;" class="text-center">#</th>
                <th style="width:200px;" class="text-center">Tên Danh Mục </th>
                <th style="width:200px;" class="text-center">Slug</th>
                <th style="width:200px;" class="text-center">Ngày Đăng  </th>
                <th style="width:200px;" class="text-center">Chức Năng </th>
                <th style="width:20px;" class="text-center">ID</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($list_category as $category)
                  
              
              
              <tr>
                <td>
                  <input type="checkbox">
                </td>
                <td>{{$category->name}}</td>
                <td>{{$category->slug}}</td>
                <td>{{$category->created_at}}</td>
                <td>
                  @if($category->status==1)
                  <a href="{{route('category.status',['category'=>$category->id])}}" class="btn btn-sm btn-danger"><i class="fas fa-toggle-on"></i></a>
                  @else 
                  <a href="{{route('category.status',['category'=>$category->id])}}" class="btn btn-sm btn-success"><i class="fas fa-toggle-off"></i></a>
                  @endif 
                  <a href="{{route('category.edit',['category'=>$category->id])}}" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                  <a href="{{route('category.show',['category'=>$category->id])}}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                  <a href="{{route('category.delete',['category'=>$category->id])}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>

                </td>
                <td>{{$category->id}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
  @endsection