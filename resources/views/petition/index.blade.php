@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Petitions</h1>
            <hr>

            @foreach($petitions as $item)
            <div class="attachment-block clearfix">
                <img class="attachment-img"
                     src="https://thumb7.shutterstock.com/display_pic_with_logo/2266028/282784619/stock-vector-newspaper-icon-282784619.jpg"
                     alt="Attachment Image">

                <div class="attachment-pushed">
                    <h4 class="attachment-heading"><a href="{{url('petitions/'.$item->id)}}">{{$item->title}}</a>
                    </h4>

                    <div class="attachment-text">
                      {{$item->body}}
                    </div>
                </div>
            </div>
            @endforeach

            <hr>
            <a href="{{url('petitions/create')}}" class="btn btn-success btn-block">Create Petition</a>
        </div>
    </div>
@endsection