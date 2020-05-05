@extends('layouts.global')
@section('title') Edit Report @endsection

@section('content')
<div class="col-md-8">
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif
    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('reports.update', [$report->id])}}"
        method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <label for="status">Status</label><br>
            <select class="form-control" name="status" id="status">
                <option {{$report->status == "PROSES" ? "selected" : ""}} value="PROSES">PROSES</option>
                <option {{$report->status == "SELESAI" ? "selected" : ""}} value="SELESAI">SELESAI</option>
                </select><br>

        <input class="btn btn-primary" type="submit" value="Simpan" />
    </form>
</div>
@endsection
