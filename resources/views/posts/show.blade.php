@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-sm-8">
            <a href="/posts" class="btn btn-secondary mb-2">Go Back</a>
            <img class="" style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}">
            <h1>{{$post->title}}</h1>
            <div>
                {!!$post->body!!}
            </div>
            <hr>
            <small>written on {{$post->created_at}} by {{$post->user->name}}</small>
            <hr>
            @if(!Auth::guest())
                @if(Auth::user()->id == $post->user_id)
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                        {{Form::hidden('_method','DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                @endif
            @endif
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="article__right">
                <div class="inner__content">
                <div class="editor">
                <img class="avatar" src="/storage/cover_images/{{$post->cover_image}}" alt="Flash kuku">
                <p class="name">Flash kuku</p>
                <p class="desc">Flash kuku is a editorial director of VideoSolo, who writes high-quality product tutorials, reviews, tips and tricks regularly. </p>
                </div>
               
                <div class="related_posts">
                <p>Related Article</p>
                <ul>
                <li><a href="#">post one</a></li>
                <li><a href="#">post two</a></li>
                
                </ul> </div> </div>
                </div>

        </div>
    </div>
    
@endsection