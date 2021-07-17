<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Best Bio Site Ever!!</title>

        <link rel="stylesheet" href="css/css.css">
    </head>
    <body>
        <div class="box1">
            <p class="font-color1">
                WELCOME!
            </p>
        </div>
        <div class="box2">
            <img src="img/banner.jpg" alt="snow" class="banner">
            <div class="box2-1">
                <p class="font-color1 font-style1 fontsize-title">
                    Saya Dipa!!
                </p>
                <br>
                <p class="font-color1 font-style1 fontsize-text">
                    Mari mengenal lebih dalam tentang Dipa!!<br>
                    Situs ini menyediakan informasi rahasia tentang Dipa
                </p>
            </div>
            <div class="box2-2">
                <p class="font-color1">
                    Klik tombol dibawah untuk info lengkap!
                </p>
            </div>
        </div>
        <div class="box3">
            <button class="button">
                <a class="font-color1" href="{{ url('data') }}">
                    More Info
                </a>
            </button>
        </div>
    </body>
</html>
