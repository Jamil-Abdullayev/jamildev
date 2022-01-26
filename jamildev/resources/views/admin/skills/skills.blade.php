@extends('admin.main')

@section('title')
    Skills
@endsection

@section('activity4')
    active
@endsection

@section('content')
    <div class="wui-content-header">
        <a href="#" class="wui-side-menu-trigger"><i class="fa fa-bars"></i></a>
        <h1 class="wui-title">SKILLS</h1>
        <a class="btn btn-success" href="{{route('skills/add')}}"> ADD </a>
    </div>
    <div class="table-reponsive box">
        <table id="example" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Desc</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Do</th>
            </tr>
            </thead>
           <tbody>
           @foreach($all_data as $item)
               <tr>
                   <td>{{$item->name}}</td>
                   <td>{{$item->description}}</td>
                   <td>{{$item->created_at}}</td>
                   <td>{{$item->updated_at}}</td>
                   <td>
                       <a class="btn btn-info" href="{{route('skills/edit',$item->id)}}"> EDIT</a>
                       <a class="btn btn-danger" href="{{route('skills-delete',$item->id)}}"> DELETE</a>
                   </td>
               </tr>
           @endforeach
           </tbody>
        </table>
    </div>



@endsection
