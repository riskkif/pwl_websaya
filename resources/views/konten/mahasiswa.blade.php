@extends ('layouts.main')

@section ('title',$title)
@section ('content')
<h2 style="padding: 15px; text-align: center">List Mahasiswa Polindra</h2>
<table class="table table-dark table-striped" border="1">
    <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">NIM</th>
            <th scope="col">NAMA</th>
            <th scope="col">PRODI</th>
            <th scope="col">ANGKATAN</th>
        </tr>
    </thead>
    <tbody>
        <?php
    
        $prodi =  DB::table('mhs')->get();
        $no=1;?>
        <?php foreach ($prodi as $data){ ?>
        <tr>
            <td><?= $no ?></td>
            <td><?=$data->nim; ?></td>
            <td><?=$data->nama;?></td>
            <td><?=$data->prodi;?></td>
            <td><?=$data->angkatan;?></td>
        </tr>
        <?php $no++; }
        ?>                
</table>
@endsection
