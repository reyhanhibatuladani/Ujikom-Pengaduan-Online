@extends("layouts.global")

@section("title") Buat Laporan @endsection

@section("content")

<div class="col-md-8">

@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif 

    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('reports.store')}}" method="POST">

        @csrf

        <label for="judul_laporan">Judul Laporan</label>

            <input value="{{old('judul_laopran')}}" class="form-control {{$errors->first('judul_laopran') ? "is-invalid": ""}}" placeholder="Judul Laporan" type="text" name="judul_laporan" id="judul_laporan"/>

             <div class="invalid-feedback">
                {{$errors->first('judul_laporan')}}
             </div>

        <br>

        <label for="isi_laporan">Isi Laporan</label><br>
            <textarea name="isi_laporan" id="isi_laporan" class="form-control {{$errors->first('isi_laporan') ? "is-invalid" : ""}} "placeholder="Masukan isi laporan">{{old('isi_laporan')}}</textarea>

            <div class="invalid-feedback">
                {{$errors->first('isi_laporan')}}
            </div>
            <br>

            
        <label>Image</label>
        <input type="file" class="form-control {{$errors->first('image') ? "is-invalid" : ""}}" name="image">
        <div class="invalid-feedback">
            {{$errors->first('image')}}
        </div>

        
        <br>

            <input class="btn btn-primary" type="submit" value="Save">

    </form>

</div>

@endsection
