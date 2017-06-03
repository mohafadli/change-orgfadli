@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="box box-widget">
                <div class="box-header with-border">
                    <div class="user-block">
                        <img class="img-circle" src="https://dimg.voot.com/include/user-images/blank-user.jpg"
                             alt="User Image">
                        <span class="username"><strong>Archie Isdiningrat</strong></span>
                        <span class="description">7:30 PM Today</span>
                    </div>
                </div>
                <div class="box-body">
                    <h4><strong>{{$petition->title}}</strong></h4>
                    <p>{{$petition->body}}</p>
                </div>

                <div class="box-footer box-comments">

                    <div class="box-comment">

                        <img class="img-circle img-sm" src="https://dimg.voot.com/include/user-images/blank-user.jpg"
                             alt="User Image">

                        <div class="comment-text">
                      <span class="username"> Anonymous
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span>

                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                        </div>

                    </div>

                </div>

                <div class="box-footer">
                    <form action="#" method="post">
                        <div class="img-push">
                            <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                        </div>
                    </form>
                </div>

            </div>

            @if(\Illuminate\Support\Facades\Auth::check())

            <div class="pull-right">
                <div class="btn-group">
                    <a href="{{url('petitions/'.$petition->id.'/edit')}}" class="btn btn-warning">Edit</a>
                    <button type="button" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-petition').submit()">Delete</button>
                </div>
            </div>
            @endif
            <form id="delete-petition" method="post" action="{{url('petitions/'.$petition->id)}}">
                {{csrf_field()}}
                {{method_field('delete')}}
            </form>
            <a class="btn btn-default" href="{{url('petitions')}}">Back</a>
        </div>
    </div>
    @endsection