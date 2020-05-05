@extends('layouts.global')
@section('title') Detail laporan @endsection
@section('content')

<div class="col-md-8">
    <div class="card">
        <div class="card-body">
            <b>Judul Laporan:</b> <br />
            {{$report->judul_laporan}}

            <br><br>

            <b>Gambar:</b> <br/>
            @if($report->image)
                <img src="{{asset('storage/'. $report->image)}}" width="128px" />
            @else
            No image
            @endif

            <br>
            <br>

            <b>Deskripsi:</b><br>
            {{$report->isi_laporan}}

            <br>
            <br>

            <b>Status:</b> <br>
            {{$report->status}}

            <br><br>

            <b>Tanggal laporan diterima:</b> <br>
            {{$report->tanggal}}

            <br> <br>

            <b>Pengirim:</b> <br>
            {{$report->users->name}}
        </div>
    </div>
</div>

@endsection