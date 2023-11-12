@extends ('layouts.main')

@section ('title',$title)
@section ('content')
                <table class="table">
                        <thead>
                                <tr>
                                        <th scope="col">KODE PRODI</th>
                                        <th scope="col">NAMA PRODI</th>
                                        <th scope="col">JURUSAN</th>
                                        
</tr>
</thead>
                        <tbody>
                                @foreach ($dataProdi as $item)
                                <tr>
                                        <td>{{ $item['kode'] }}</td>
                                        <td>{{ $item['prodi'] }}</td>
                                        <td>{{ $item['jurusan'] }}</td>
                                        
</tr>
@endforeach
</tbody>
</table>
@endsection