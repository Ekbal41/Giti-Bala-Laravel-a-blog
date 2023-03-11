@extends('layouts.admin')

@section('content')
<div class="bg-gray w-75 mt-md-3 " style="margin-left:330px;">
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
    <h1 class=" mt-5 text-uppercase text-primary">Update Article</h1>
    <div class="border border-primary rounded p-3 mt-4">
        <form action="{{route('posts.update', $post->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mt-3">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{$post->title}}" id="title" placeholder="Enter title">
            </div>
            <div class="form-group mt-3">
                <label for="body">Body</label>
                <textarea name="body" class="form-control" id="body"  rows="5">{{$post->body}}</textarea>
            </div>
            <button  class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
</div>



@endsection