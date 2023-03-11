@extends('layouts.admin')

@section('content')
<div class="bg-gray w-75 mt-md-3 " style="margin-left:330px;">
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
    <h1 class=" mt-5 text-uppercase text-primary">Add Article</h1>
    <div class="border border-primary rounded p-3 mt-4">
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <div class="form-floating mb-3 mt-5">
                <input type="text" name="title" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Article Title</label>
            </div>
            <div class="form-floating">
                <textarea class="form-control" name="body" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
                <label for="floatingTextarea2">Article Body</label>
            </div>
            <button class="btn btn-primary px-3 mt-3 mx-1">Publish</button>
        </form>
    </div>
</div>



@endsection