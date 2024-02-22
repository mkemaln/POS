<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>POS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">

        {{-- font awesome --}}
        <script src="https://kit.fontawesome.com/56856cd8a1.js" crossorigin="anonymous"></script>
                
        {{-- style --}}
        <style>
            a {
                text-decoration: none;
                font-family: 'Poppins', sans-serif;
                color: black;
            }
        </style>

        {{-- jquery --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            $(document).ready(function() {
                $('.cat-btn').on('click', function() {
                    $('.category').slideToggle('slow');

                    if ($('.category').hasClass('d-none')) {
                        $('.category').removeClass('d-none');
                    } else{
                        $('.category').addClass('d-none');
                    }                
                });
            });
        </script>
    </head>
    <body>
        <h1 class="mx-4 mt-4 mb-5">POS {{ $title }}</h1>

        {{-- SIMPLE --}}

        {{-- <ul>
            <li><a href="/category/food-beverage">Food Beverage</a></li>
            <li><a href="/category/beauty-health">Beauty Health</a></li>
            <li><a href="/category/home-care">Home Care</a></li>
            <li></li>
        </ul>
        <a href="/user/2241720044/name/Kemal">Profile</a>
        <a href="/sales">Sales page</a> --}}


        {{-- WITH BOOTSTRAP --}}
        
        {{-- profile card --}}
        <div class="row mx-3">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <a href="/user/2241720044/name/M. Kemal Nugraha">
                        <img src="https://source.unsplash.com/300x150/?profile icon" class="card-img-top" alt="profile">
                        <div class="card-body">
                        <p class="card-text text-center fs-4">My Profile</p>
                        </div>
                    </a>
                </div>
            </div>

            {{-- sales card --}}
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <a href="/sales">
                        <img src="https://source.unsplash.com/300x150/?sales" class="card-img-top" alt="sales">
                        <div class="card-body">
                        <p class="card-text text-center fs-4">Sales page</p>
                        </div>
                    </a>
                </div>
            </div>

            {{-- category card --}}
            <div class="col-md-3">
                <div class="card" style="width: 18rem; ">
                    <a href="#" class="cat-btn">
                        <img src="https://source.unsplash.com/300x150/?category product" class="card-img-top" alt="category">
                        <div class="card-body">
                        <p class="card-text text-center fs-4">Category <i class="fa-solid fa-caret-down"></i></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        {{-- category detailed card --}}
        <div class="category d-none">
            <div class="row mx-3 py-4" style="background-color: #EEEEDD;">
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <a href="/category/food-beverage">
                            <img src="https://source.unsplash.com/300x150/?food beverage" class="card-img-top" alt="food beverage">
                            <div class="card-body">
                            <p class="card-text text-center fs-4">Food Beverage</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card" style="width: 18rem;">
                        <a href="/category/beauty-health">
                            <img src="https://source.unsplash.com/300x150/?beauty health" class="card-img-top" alt="beauty health">
                            <div class="card-body">
                            <p class="card-text text-center fs-4">Beauty Health</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card" style="width: 18rem;">
                        <a href="/category/home-care">
                            <img src="https://source.unsplash.com/300x150/?home care" class="card-img-top" alt="home care">
                            <div class="card-body">
                            <p class="card-text text-center fs-4">Home Care</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card" style="width: 18rem;">
                        <a href="/category/baby-kid">
                            <img src="https://source.unsplash.com/300x150/?baby kid" class="card-img-top" alt="baby kid">
                            <div class="card-body">
                            <p class="card-text text-center fs-4">Baby Kid</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
