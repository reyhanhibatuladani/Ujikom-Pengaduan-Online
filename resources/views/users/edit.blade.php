@extends('layouts.global')
@section('title') Edit User @endsection

@section('content')
<div class="col-md-8">
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif
    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('users.update', [$user->id])}}"
        method="POST">
        @csrf
        <input type="hidden" value="PUT" name="_method">
        <label for="name">Name</label>
        <input value="{{old('name') ? old('name') : $user->name}}"
            class="form-control {{$errors->first('name') ? "is-invalid" : ""}}" placeholder="Full Name" type="text"
            name="name" id="name" />
        <div class="invalid-feedback">
            {{$errors->first('name')}}
        </div>
        <br>

        <label for="username">Username</label>
        <input value="{{$user->username}}" class="form-control" placeholder="username" type="text"
            name="username" id="username" />
        <br>

        <label for="">Roles</label>
        <br>
        <input type="checkbox" {{$user->roles == 'ADMIN' ? 'checked' : ''}} id="ADMIN" value="ADMIN">
        <label for="ADMIN">Administrator</label>
        <input type="checkbox" {{$user->roles == 'PETUGAS' ? 'checked' : ''}} id="PETUGAS" value="PETUGAS">
        <label for="PETUGAS">Staff</label>
        <input type="checkbox" {{$user->roles == 'MASYARAKAT' ? 'checked' : ''}} id="MASYARAKAT" value="MASYARAKAT">
        <label for="MASYARAKAT">Masyarakat</label>

        <div class="invalid-feedback">
            {{$errors->first('roles')}}
        </div>
        <br>
        <label for="phone">Nomor Telepon</label>
        <br>
        <input type="text" name="no_telp" class="form-control {{$errors->first('no_telp') ? "is-invalid" : ""}}" value="{{old('no_telp') ? old('no_telp') : $user->no_telp}}">
        <div class="invalid-feedback">
            {{$errors->first('no_telp')}}
        </div>
        <br>

        <label for="email">Email</label>
        <input value="{{$user->email}}" class="form-control {{$errors->first('email') ? "is-invalid" : ""}} " placeholder="user@mail.com" type="text" name="email" id="email" />
        <div class="invalid-feedback">
            {{$errors->first('email')}}
        </div>
        <br>

        <input class="btn btn-primary" type="submit" value="Simpan" />
    </form>
</div>
@endsection
