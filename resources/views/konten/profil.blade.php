@extends ('layouts.main')
@section ('title',$title)
@section ('content')
<!DOCTYPE html>
<html>
        <head>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
        <Style>
        img{ width: 170px; max-height: 290px; display : flex;}
        a{ padding: 0 8px;}
</Style>
    </head>
    <body>
    <div class="alert alert-danger mb-5" role="alert">
    <div class="container mb-0">
        <div style="text-align: center; margin-top: -10px;">
        <h3> TUGAS PWL </h3>
        <p class="">D3 Teknik Informatika Politeknik Negeri Indramayu</p><br>
    </div>
</div>
</div>
    <div class="position-absolute top-30 start-50 translate-middle" style="z-index: 99;">
        <img src="{{asset('/storage/uploads/profil.jpg')}}" class="rounded  img-thumbnail " alt="profil.jpg">
    </div><br>
    <div class="alert alert-secondary"  role="alert">
        <div class="container">
        <div class=" d-flex mt-5 justify-content-center p-1 ">
            <a href="https://www.instagram.com/riskkif/"><box-icon type='logo' name='instagram'></box-icon></a>
            <a href="https://letterboxd.com/kyy/?fbclid=PAAaaSjs0qkX56acIl2ecB3z36jHfA73wm7MiXvsP5HLRy3c_umw7M4JkgiC4"><box-icon type='logo' name='imdb'></box-icon></a>
            <a href="https://api.whatsapp.com/send?phone=62895334763024"><box-icon type='logo' name='whatsapp'></box-icon></a>
            <a href="https://open.spotify.com/playlist/4QhVAZkVLjYR43g6NSBOY9?si=SaE4TpkkRYeVP06NVg4fsg&utm_source=copy-link"><box-icon type='logo' name='spotify'></box-icon></a>
        </div>
        <figure class="text-center">
            <blockquote class="blockquote">
                <p>Halo, saya <strong>Riski Firmansah</strong>, mahasiswa dari Politeknik Negeri Indramayu dengan program studi <strong>D3 Teknik Informatika</strong> 
                angkatan 2022, dan nomor induk mahasiswa saya adalah <strong>223026</strong>. Senang berkenalan dengan Anda!</p>
            </blockquote>
        </figure>
        </div>
    </div>
</body>
</html>
@endsection
