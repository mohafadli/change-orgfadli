@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($errors->first())
                <div class="alert alert-dismissible alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h4><i class="icon fa fa-times"></i> Alert!</h4>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <div class="col-md-8 col-md-offset-2">
            <h1>Edit Petition</h1>
            <br>
            <div class="box box-warning">
                <div class="box-body">
                    <form role="form" method="post" action="{{url('petitions/'.$petition->id)}}">
                        {{csrf_field()}}
                            {{method_field('put')}}
                        <!-- text input -->
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name ="title" class="form-control" value="{{$petition->title}}" placeholder="Enter title">
                        </div>

                        <!-- textarea -->
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name ="body"rows="4" placeholder="Enter description">{{$petition->body}}</textarea>
                        </div>

                        <div class="form-group">
                            <input class="btn btn-warning btn-block" type="submit" value="Update Petition">
                        </div>

                    </form>
                </div>
            </div>

            <a href="{{url('petitions/'.$petition->id)}}" class="btn btn-default">Back</a>

        </div>
    </div>
    @endsection