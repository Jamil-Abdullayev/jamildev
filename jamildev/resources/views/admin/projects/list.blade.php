@extends('admin.main')

@section('title')
    Projects
@endsection

@section('activity6')
    active
@endsection

@section('content')
    <div class="wui-content-header">
        <a href="#" class="wui-side-menu-trigger"><i class="fa fa-bars"></i></a>
        <h1 class="wui-title">Projects Categories</h1>
        <a class="btn btn-success" href="{{route('project_category-add')}}"> ADD </a>
    </div>
    <div class="table-reponsive box">
        <table id="example" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Do</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>
                        <a class="btn btn-info" href="{{route('edit-procat',$item->id)}}"> EDIT</a>
                        <a class="btn btn-danger" href="{{route('delete-cat',$item->id)}}"> DELETE</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



@endsection
