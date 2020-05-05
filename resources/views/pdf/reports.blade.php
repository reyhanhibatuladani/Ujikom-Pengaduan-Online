<html>

<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table,
        th,
        td {
            border: 1px solid black;
            height: 20px;
        }
    </style>
    <h1>Daftar Laporan</h1>
    <table>
        <thead>
            <tr>
                <th><b>Judul Laporan</b></th>
                <th><b>Pengirim</b></th>
                <th><b>Tanggal</b></th>
                <th><b>Status</b></th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $report)
            <tr>
                <td>{{$report->judul_laporan}}</td>
    
                <td>{{$report->users->name}}</td>
                <td>{{$report->tanggal}}</td>
    
    
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
    
    

            </tr>
            @endforeach
        </tbody>
    </table>
</head>
</html>