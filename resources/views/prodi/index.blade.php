@extends ('layouts.main')

@section ('title',$title)
@section ('content')
        <h2>Nama: {{$mhs}} </h2>
                <table class="table">
                        <thead>
                                <tr>
                                        <th scope="col">KODE</th>
                                        <th scope="col">NAMA PRODI</th>
                                        
</tr>
</thead>
                        <tbody>
                                @foreach ($dataProdi as $item)
                                <tr>
                                        <td>{{ $item['kd_prodi'] }}</td>
                                        <td>{{ $item['nama_prodi'] }}</td>
</tr>
@endforeach
</tbody>
</table>
@endsection