@extends('layouts.admin')

@section('content')
<div class="bg-gray w-75 mt-md-3 " style="margin-left:330px;">
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
    
    <div class="row">
        
        </div>
        <div class="border border-primary p-2 rounded mt-4 bg-white col px-4">
            <h4 class=" text-uppercase text-primary mb-2 mt-2 mb-5">Assign A Permissin To A Role</h4>
            <form
            method="POST"
            action="{{ route('permission.store')}}"
            >
            @csrf
            <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Choose Role</label>
                    <select class="form-select" id="inputGroupSelect01" name="rol">
                        <option selected>Choose...</option>
                       @foreach($roles as $role)
                        <option value="{{$role->name}}">{{$role->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group mb-3 ">
                    <label class="input-group-text" for="inputGroupSelect01">Choose Permission</label>
                    <select   class="form-select" id="inputGroupSelect01" name="per">
                        <option selected>Choose...</option>
                        @foreach($pers as $per)
                        <option value="{{$per->name}}">{{$per->name}}</option>
                        @endforeach
                    </select>
                </div>

                <button class="btn btn-primary">Add Permission</button>
            </form>

        </div>
    </div>
</div>



@endsection