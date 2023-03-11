@extends('layouts.admin')

@section('content')
<div class="bg-gray w-75 mt-md-3 " style="margin-left:330px;">
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
    <div class="mt-4">
        @foreach ($rols as $role )
        <span class="badge bg-success">{{$role->name}}</span>
        @endforeach
    </div>
    <div class="row">
        <div class="mt-4 col">
            <div class="border border-primary p-2 rounded my-3 bg-white">
                <h4 class=" text-uppercase text-primary">Admin</h4>
                <p>A admin is somone who cane do almost anything.</p>
            </div>
            <div class="border border-primary p-2 rounded my-3 bg-white">
                <h4 class=" text-uppercase text-primary">Mod</h4>
                <p>A Mod is for Modaretor.</p>
            </div>
            <div class="border border-primary p-2 rounded my-3 bg-white">
                <h4 class=" text-uppercase text-primary">Writer</h4>
                <p>Writer of the article.</p>
            </div>
            <div class="border border-primary p-2 rounded my-3 bg-white">
                <h4 class=" text-uppercase text-primary">Visitor</h4>
                <p>Just an visitor.</p>
            </div>

        </div>
        <div class="border border-primary p-2 rounded mt-4 bg-white col px-4">
            <h4 class=" text-uppercase text-primary mb-2 mt-2 mb-5">Assign A Role To An User</h4>
            <form
            method="POST"
            action="{{ route('role.store')}}"
            >
            @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Email</span>
                    <input type="email" name="email" class="form-control" placeholder="Email Address" aria-label="Email Address" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Choose Role</label>
                    <select class="form-select" id="inputGroupSelect01" name="role">
                        <option selected>Choose...</option>
                        <option value="admin">Admin</option>
                        <option value="mod">Mod</option>
                        <option value="writer">Writer</option>
                        <option value="visitor">Visitor</option>
                        <option value="editor">Editor</option>
                    </select>
                </div>

                <button class="btn btn-primary">Assign</button>
            </form>

        </div>
    </div>
</div>



@endsection