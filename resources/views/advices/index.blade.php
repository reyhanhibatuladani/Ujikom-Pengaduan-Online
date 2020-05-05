@extends("layouts.global")

@section("title") Tanggapan list @endsection
@section("content")
{{-- <div class="row">
    <div class="col-md-6">
        <form action="{{route('advices.index')}}">
            <div class="input-group mb-3">
                <input value="{{Request::get('keyword')}}" name="keyword" class="form-control col-md-10" type="text"
                    placeholder="Filter berdasarkan kasus" />
                <div class="input-group-append">
                    <input type="submit" value="Filter" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</div> --}}

{{-- <hr class="my-3"> --}}

@if(session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif

<div class="row">
    <div class="col-md-12 text-right">
        <a href="{{route('advices.create')}}" class="btn btn-primary">Create advice</a>
    </div>
</div>

<br>

<table class="table table-bordered">
    <thead>
        <tr>
            <th><b>Judul Laporan</b></th>
            <th><b>Petugas</b></th>
            <th><b>Tanggal</b></th>
            <th><b>Tanggapan</b></th>
            <th><b>Action</b></th>
        </tr>
    </thead>
    <tbody>

        @foreach($advices as $advice)
        <tr>
            <td>{{$advice->reports->judul_laporan}}</td>

            <td>{{$advice->users->name}}</td>
            <td>{{$advice->tanggal_tanggapan}}</td>
            <td>{{$advice->tanggapan}}</td>


            <td>
                <a class="btn btn-info text-white btn-sm" href="{{route('advices.edit', [$advice->id])}}">Edit</a>

                {{-- <a href="{{route('advices.show', [$advice->id])}}" class="btn btn-primary btn-sm">Detail</a> --}}

                <form onsubmit="return confirm('Delete this advice permanently?')" class="d-inline"
                    action="{{route('advices.destroy', [$advice->id ])}}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">

                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan=10>
                {{$advices->appends(Request::all())->links()}}
            </td>
        </tr>
    </tfoot>
</table>
@endsection
