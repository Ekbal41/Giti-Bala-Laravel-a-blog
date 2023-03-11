@extends('layouts.admin')

@section('content')
<div class="bg-gray w-75 mt-md-3 " style="margin-left:330px;">
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
    <h1 class=" mt-5 text-uppercase text-primary">Your Writings</h1>
    <div class=" mx-auto mt-5 border border-primary rounded">

        @if (count($allarticle) > 0)
        <table class="table  mt-4 ">
            <thead class="thead-dark">
                <tr>
                   
                    <th scope="col"><div class="px-4 ">Name</div></th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody class="">
                @foreach($allarticle as $article)
                <tr>
                  
                    <td class=" fw-bolder">
                       <div class="px-4 mt-2"> {{$article->title}}</div>
                    </td>
                    <td class="d-flex">
                        <a class="mx-4" href="{{route('posts.edit', $article->id)}}"><i class="bi bi-pencil-square fs-1 text-success"></i></a>

                        <form method="POST" action="{{route('posts.destroy', $article->id)}}" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><i class="bi bi-trash3-fill fs-1 text-danger "></i></button>

                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        @else
        <div class="alert alert-info mt-4" role="alert">
            You have not written any article yet.
        </div>
        @endif


    </div>
</div>



@endsection