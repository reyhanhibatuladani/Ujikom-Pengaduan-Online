@extends("layouts.global")

@section("title") Report list @endsection
@section("content")
<div class="row">
    <div class="col-md-6">
        <form action="{{route('reports.index')}}">
            <div class="input-group mb-3">
                <input value="{{Request::get('keyword')}}" name="keyword" class="form-control col-md-10" type="text"
                    placeholder="Filter berdasarkan kasus" />
                <div class="input-group-append">
                    <input type="submit" value="Filter" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</div>

<hr class="my-3">

@if(session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif

<div class="row">

    <div class="col-md-12 text-right mt-3">
        <a class="btn btn-info" href="{{ url('/pdf/reports') }}">
            <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Create pdf </a>
    </div>
</div>



<br>

<div class="table-responsive mt-3">

<table class="table table-bordered">
    <thead>
        <tr>
            <th><b>Judul Laporan</b></th>
            <th><b>Pengirim</b></th>
            <th><b>Tanggal</b></th>
            <th><b>Foto</b></th>
            <th><b>Status</b></th>
            <th><b>Action</b></th>
        </tr>
    </thead>
    <tbody>

        @foreach($reports as $report)
        <tr>
            <td>{{$report->judul_laporan}}</td>

            <td>{{$report->users->name}}</td>
            <td>{{$report->tanggal}}</td>


            <td>
                @if($report->image)
                <img src="{{asset('storage/' . $report->image)}}" width="96px" />
                @endif
            </td>

            <td>
                @if($report->status == "PROSES")
                <span class="badge bg-info text-light">
                    {{$report->status}}
                </span>
                @else
                <span class="badge bg-success text-light">
                    {{$report->status}}
                </span>
                @endif
            </td>


            <td>
                <a class="btn btn-info text-white btn-sm" href="{{route('reports.edit', [$report->id])}}">Edit</a>

                <a href="{{route('reports.show', [$report->id])}}" class="btn btn-primary btn-sm">Detail</a>

                <form onsubmit="return confirm('Delete this report permanently?')" class="d-inline"
                    action="{{route('reports.destroy', [$report->id ])}}" method="POST">
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
                {{$reports->appends(Request::all())->links()}}
            </td>
        </tr>
    </tfoot>
    
</table>
</div>
@endsection
