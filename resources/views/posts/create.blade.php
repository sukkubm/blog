

@extends('layouts.master')

@section('content')
     

        <div class="col-sm-8 blog-main">

            <h1>Create a post</h1>
            
            <form method="post" action="/posts">
                
                {{ csrf_field() }}
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="title">
                </div>
                
                <div class="form-group">
                  Body
                  <textarea name="body" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>
                
                @include('layouts.errors')
                
             </form>

        </div><!-- /.blog-main -->

        
     
@endsection

