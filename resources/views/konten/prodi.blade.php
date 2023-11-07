@extends ('layouts.main')

@section ('title',$title)
@section ('content')
<h2 style="padding: 15px; text-align: center">List Prodi Polindra</h2>
<table class="table table-dark table-striped" border="1">
    <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">KODE PRODI</th>
            <th scope="col">NAMA PRODI</th>
            <th scope="col">JURUSAN</th>
        </tr>
    </thead>
    <tbody>
        <?php
    
        $prodi =  DB::table('prodi')->get();
        $no=1;?>
        <?php foreach ($prodi as $data){ ?>
        <tr>
            <td><?= $no ?></td>
            <td><?=$data->kode; ?></td>
            <td><?=$data->prodi;?></td>
            <td><?=$data->jurusan;?></td>
        </tr>
        <?php $no++; }
        ?>                
</table>
@endsection
