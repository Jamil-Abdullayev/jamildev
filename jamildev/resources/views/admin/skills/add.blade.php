@extends('admin.main')

@section('title')
    Skills
@endsection

@section('activity4')
    active
@endsection

@section('content')
    <div class="container-fluid dash_cus">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="user_info">
                        <div class="col-sm-12">
                            <h2>Profile</h2>
                        </div>
                        <div class="col-sm-12">
                            <form method="post" action="{{route('skills/add/submit')}}">
                                @csrf
                                <div class="form-group row">
                                    <label for="newName" class="col-md-3 col-form-label">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control cus_input" id="" name="name" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="newName" class="col-md-3 col-form-label">Desc</label>
                                    <div class="col-md-9">
                                        <textarea name="text" id="" cols="30" rows="10"></textarea></div>
                                </div>
                                <div class="form-group row">
                                    <label for="newName" class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" value="OK" class="form-control cus_input_btn">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
