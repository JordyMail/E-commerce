<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="Stylesheet.css">
    <script src="Script.js"></script>
</head>
<body>
    <!--Header-->
    <header class="mainHead">
        <!--Header_First-->
        <div class="head_F">
            <div class="head_S">
                <i class="lgHT"></i>
                <a class="childHT-DownApp">Download JM-Store App</a>
            </div>
            <div class="head_T">
<a href="{{ route('about') }}" class="childHT-Abt">About</a>

                <a href="" class="childHT-Ptr">Partner</a>
                <a href="" class="childHT-Slg">Start Selling</a>
                <a href="" class="childHT-Pro">Promotion</a>
                <a href="" class="childHT-Hlp">Help</a>
            </div>  
        </div>
        <!--Header_Second-->
        <div class="head_F1">
            <div class="img-Logo">
                <img class="img-Logo-1" src="images/main-logo.png" alt="">

            </div>
            <div class="searchBar">
                <div class="searchBar_Sec">
                    <i class="lgHT-1"></i>
                    <div class="inputSrc">
                        <input type="" name="" id="">
                    </div>
                </div>
                <div class="searchBar_CC">
                    <div class="menuShw">Category</div> 
                </div>
            </div>
            <div class="signPg">
                <i class="lgHt-2"></i>
                <div class="lF"></div>
<button class="login"><a href="{{ route('login') }}"><strong>Login</strong></a></button>

<button class="sign-Up"><a href="{{ route('register') }}"><strong>Sign-Up</strong></a></button>

            </div>
            <div class="location">
                <i class="lgHt-3"></i>
<a href="{{ route('map') }}">Jl. Kampus Hijau, Simpangan, Kec. Cikarang Utara, Kab. Bekasi, Jawa Barat</a>

            </div>
            <div class="contFam">
                info or another
            </div>
        </div>
    </header>

    <!--Content-->
    <main>
        <h1>Welcome to JM-Store</h1>
        <p>Your one-stop shop for all your needs.</p>
    </main>


    <!--Footer-->
    <footer>
        <p>&copy; 2023 JM-Store. All rights reserved.</p>
    </footer>

</body>
</html>
