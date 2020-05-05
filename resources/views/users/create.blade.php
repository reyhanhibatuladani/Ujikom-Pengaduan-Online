@extends("layouts.global")

@section("title") Create User @endsection

@section("content")

<div class="col-md-8">

@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif 

    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('users.store')}}" method="POST">

        @csrf

        <label for="name">Name</label>

            <input value="{{old('name')}}" class="form-control {{$errors->first('name') ? "is-invalid": ""}}" placeholder="Full Name" type="text" name="name" id="name"/>

             <div class="invalid-feedback">
                {{$errors->first('name')}}
             </div>

        <br>

        <label for="username">Username</label>

            <input value="{{old('username')}}" class="form-control {{$errors->first('username') ? "is-invalid": ""}}" placeholder="Full Name" type="text" name="username" id="username">

            <div class="invalid-feedback">
                {{$errors->first('username')}}
            </div>
        <br>

        <label for="">Roles</label>
        <br>

            <input class=" {{$errors->first('roles') ? "is-invalid" : "" }}"  type="checkbox" name="roles[]" id="ADMIN" value="ADMIN">
        <label for="ADMIN">Administrator</label>

            <input class=" {{$errors->first('roles') ? "is-invalid" : "" }}" type="checkbox" name="roles[]" id="PETUGAS" value="PETUGAS">
        <label for="PETUGAS">Petugas</label>

            <input class=" {{$errors->first('roles') ? "is-invalid" : "" }}" type="checkbox" name="roles[]" id="MASYARAKAT" value="MASYARAKAT">
        <label for="MASYARAKAT">Masyarakat</label>

        <div class="invalid-feedback">
            {{$errors->first('roles')}}
        </div>

        <br>

        <br>

        <label for="no_telp">Nomor Telepon</label>
        <br>
            <input value="{{old('no_telp')}}" class="form-control {{$errors->first('no_telp') ? "is-invalid": ""}}" placeholder="Masukan nomor telepon" type="number" name="no_telp" id="no_telp">

            <div class="invalid-feedback">
                {{$errors->first('no_telp')}}
            </div>

        <br>



        <label for="email">Email</label>
        <br>
            <input value="{{old('email')}}" class="form-control {{$errors->first('email') ? "is-invalid" : ""}}" placeholder="user@mail.com" type="text" name="email" id="email">

            <div class="invalid-feedback">
                {{$errors->first('email')}}
            </div>
        <br>

        <label for="password">Password</label>
        <br>
            <input  class="form-control {{$errors->first('password') ? "is-invalid" : ""}}" placeholder="password" type="password" name="password" id="password">

            <div class="invalid-feedback">
                {{$errors->first('password')}}
            </div>

        <br>

        <label for="password_confirmation">Password Confirmation</label>
        <br>
            <input class="form-control {{$errors->first('password_confirmation') ? "is-invalid" : ""}}" placeholder="password confirmation" type="password" name="password_confirmation" id="password_confirmation">

            <div class="invalid-feedback">
                {{$errors->first('password_confirmation')}}
            </div>

        <br>

            <input class="btn btn-primary" type="submit" value="Save">

    </form>

</div>

@endsection
