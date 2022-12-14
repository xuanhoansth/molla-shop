@extends('admin.templates.master')
@section('content')
    <div class="page-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">DANH SÁCH BANNER</h5>
                        <button type="button" class="btn btn-info" style="background: #3A688C">
                            <a href="/admin/banners/create" style="color: white" >THÊM MỚI</a>
                        </button>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Banner Title</th>
                                    <th>Image</th>
                                    <th>Created_At</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($banner as $row)
                                    <tr>
                                        <td>{{$row->id}}</td>
                                        <td><a href="/admin/banners/{{$row->id}}">{{$row->name}}</a></td>
                                        <td><img height="200" width="300" src="{{asset('storage/' . $row->image)}}" alt=""></td>
                                        <td>{{$row->created_at}}</td>
                                        <td>@if($row->status === 1) {{'Mở'}}
                                            @else {{'Khóa'}}
                                            @endif
                                        </td>
                                        <td>
                                            <a href="/admin/banners/edit/{{$row->id}}"
                                               class="btn btn-sm btn-success">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="/admin/banners/delete/{{$row->id}}"
                                               class="btn btn-sm btn-danger btndelete">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Banner Title</th>
                                    <th>Image</th>
                                    <th>Created_At</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                            {{$banner->links()}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
