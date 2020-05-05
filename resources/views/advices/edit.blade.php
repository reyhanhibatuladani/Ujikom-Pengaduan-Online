@extends('layouts.global')
@section('title') Edit Tanggapan @endsection

@section('content')
<div class="col-md-8">
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif
    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('advices.update', [$advice->id])}}"
        method="POST">
        @csrf
        <input type="hidden" value="PUT" name="_method">
        
        <label for="report_id">Judul Laporan</label>
        <select multiple class="form-control" name="report_id" id="judul_laporan">
            @foreach ($reports as $id => $judul_laporan)
                @if (old('report_id', $advice->report_id) == $id)
                    <option value="{{$id}}" selected>{{$judul_laporan}}</option>
                @else
                <option value="{{$id}}">{{$judul_laporan}}</option>
                @endif
            @endforeach
        </select>

        <br>

        <label for="tanggapan">Tanggapan</label><br>
        <textarea name="tanggapan" id="tanggapan" class="form-control {{$errors->first('tanggapan') ? "is-invalid" : ""}} "placeholder="Masukan tanggapan">{{old('tanggapan') ? old('tanggapan') : $advice->tanggapan}}</textarea>

        <div class="invalid-feedback">
            {{$errors->first('tanggapan')}}
        </div>





        <br>

        <input class="btn btn-primary" type="submit" value="Simpan" />
    </form>
</div>
@endsection

@section('footer-scripts')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script>
    $('#judul_laporan').select2({
        ajax: {
            url: '/ajax/advices/search',
            processResults: function (data) {
                return {
                    results: data.map(function (item) {
                        return {
                            id: item.id,
                            text: item.judul_laporan
                        }
                    })
                }
            }
        }
    });

</script>
@endsection

