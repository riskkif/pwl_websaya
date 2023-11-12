<!DOCTYPE html>
<html>
    <head>
        <title>Struktur Komtrol WebSaya.Com</title>
    </head>
    <body>
        @if (count($mhs) == 1)
            <p>Jumlah mahasiswa adalah satu </p>
        @elseif (count($mhs) == 2)
            <p>Jumlah mahasiswa adalah 2 </p>
        @else
            <p>Jumlah mahasiswa lebih dari satu</p>
        @endif
    </body>
</html>