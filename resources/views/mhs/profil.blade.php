@extends ('layouts.main')

@section ('title',$title)
@section ('content')
                <table class="table">
                        <thead>
                                <tr>
                                        <th scope="col">NAMA</th>
                                        <th scope="col">NIM</th>
                                        <th scope="col">KELAS</th>
                                        <th scope="col">PRODI</th>
                                        
</tr>
</thead>
                        <tbody>
                                @foreach ($dataProfil as $item)
                                <tr>
                                        <td>{{ $item['nama'] }}</td>
                                        <td>{{ $item['nim'] }}</td>
                                        <td>{{ $item['kelas'] }}</td>
                                        <td>{{ $item['prodi'] }}</td>
                                        
</tr>
@endforeach
</tbody>
</table>
@endsection