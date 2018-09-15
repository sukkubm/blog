
@extends('layouts.master')

@section('content')

<div class="col-sm-8 blog-main">
    @include('posts.postdetail')
    
    <div class="comments">
        @foreach($post->comments as $comment)
        <article>
            <strong>
                {{ $comment->created_at->diffForHumans()}}
            </strong>
            {{ $comment->body }}
        </article>
        @endforeach
    </div>
    
    @if(auth()->check())
    <div class="card">
        <div class="card-block">
            <form method="post" action="/posts/{{$post->id}}/comments">
                {{ csrf_field() }}
                
                <div class="form-group">
                    <textarea name="body" placeholder="Your comments here." class="form-control" required></textarea>
                </div>
                
                 <div class="form-group">
                     <button type="submit" class="btn btn-primary">Add Comment</button>
                 </div>
                
                @include('layouts.errors')
            </form>
        </div>
    </div>
    @endif
</div>

@endsection
