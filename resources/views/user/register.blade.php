@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        <form action="">
            @csrf
            <div class="mb-3">
                <label> Name <span class="text-danger"></span></label>
                <input class="form-control" name="name" value="{{ old('name') }}"/>
            </div>
            
            <div class="mb-3">
                <label> Username <span class="text-danger"></span></label>
                <input class="form-control" name="name" value="{{ old('username') }}"/>
            </div>
            <div class="mb-3">
                <label> Password <span class="text-danger"></span></label>
                <input class="form-control" name="name" value="{{ old('pasword') }}"/>
            </div>
            <div class="mb-3">
                <label> Password Confirmation <span class="text-danger"></span></label>
                <input class="form-control" name="name" value="{{ old('pasword_confirmation') }}"/>
            </div>
        </form>
    </div>
</div>
@endsection