@extends("layouts.global")

@section("title") Create Tanggapan @endsection

@section('footer-scripts')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
    $('#nama_kelas').select2({
        ajax: {
            url: '/ajax/classrooms/search_name',
            processResults: function (data) {
                return {
                    results: data.map(function (item) {
                        return {
                            id: item.id,
                            text: item.nama_kelas
                        }
                    })
                }
            }
        }
    });

</script>

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

@section("content")

<div class="col-md-8 mt-2">

    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif

    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('advices.store')}}" method="POST">

        @csrf

        
        <label for="judul_laporan">Judul Laporan</label><br>
        <select name="report_id" multiple id="judul_laporan" class="form-control">
        </select>
        <br><br />

        <label for="tanggapan">Tanggapan</label><br>
            <textarea name="tanggapan" id="tanggapan" class="form-control {{$errors->first('tanggapan') ? "is-invalid" : ""}} "placeholder="Masukan tanggapan rumah">{{old('tanggapan')}}</textarea>

            <div class="invalid-feedback">
                {{$errors->first('tanggapan')}}
            </div>

            <br>

            
            


        <input class="btn btn-primary" type="submit" value="Save">

    </form>

</div>

@endsection
