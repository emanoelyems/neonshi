<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:opsz@6..96&family=Mulish:ital,wght@0,200;0,400;0,500;1,300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('css\style.css') }}" >

    <script src="{{ URL::asset('js/style.js') }}"></script>
    <title>Neonshi</title>
</head>
<body>
    <header id="nav" class="nav bg-black" >
        <img src="imgs\logo-neonshi-1.svg" alt="logo" class="img-logo">
        <div class="container box-nav">
            <button class="btn-nav f-white txt">Menu</button>
            <button class="btn-nav f-white txt">About</button>
            <button class="btn-nav f-white txt">Contact</button>
        </div>
        <div class="cart-icon">
            <img src="imgs/cart.svg" alt="Cart logo">
        </div>
    </header>
    <section class="hero-image">
        <div class="box ">
            <h2 class="f-white title">New!</h2>
            <p class="f-white txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque voluptatibus dolorem quisquam fuga nam enim quos rerum harum temporibus explicabo. Veritatis asperiores accusamus officiis modi! Nihil quaerat consequuntur facere autem. </p>
            <button class="btn">Menu</button>
        </div>
    </section>

    <section id="menu" class="container-menu">
        <div class="box">
            <h1>Menu</h1>
            <div class="menu-options">
                <img src="" alt="">
                <h3></h3>
                <p></p>
                <button class="btn-cart"></button>
            </div>
            <div class="menu-options">
                <img src="" alt="">
                <h3></h3>
                <p></p>
                <button class="btn-cart"></button>
            </div>
            <div class="menu-options">
                <img src="" alt="">
                <h3></h3>
                <p></p>
                <button class="btn-cart"></button>
            </div>
            <div class="menu-options">
                <img src="" alt="">
                <h3></h3>
                <p></p>
                <button class="btn-cart"></button>
            </div>
            <div class="menu-options">
                <img src="" alt="">
                <h3></h3>
                <p></p>
                <button class="btn-cart"></button>
            </div>
            <div class="menu-options">
                <img src="" alt="">
                <h3></h3>
                <p></p>
                <button class="btn-cart"></button>
            </div>
            <button class="btn-next">Next</button>
        </div>
    </section>
    <section id="about" class="conatiner-about">
        <div class="image-about"></div>
        <div class="box">
            <h2>About Us</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam sapiente nesciunt minima voluptate accusantium mollitia soluta neque, pariatur veritatis facilis sunt! Blanditiis deserunt cumque vero vel sunt nulla eligendi culpa? </p>
        </div>
    </section>
    <section id="contact" class="container-contact">
        <h1>Contact</h1>
        <div id="contact-info" class="box">
            <img src="" alt="">
            <h3></h3>
            <h3></h3>
            <h3></h3>
            <h3></h3>
            <h3></h3>
        </div>
        <div id="icon-socialMedia" class="box">
            <i></i>
            <i></i>
            <i></i>
            <i></i>
        </div>
        <div id="icon-payment" class="box">
            <i></i>
            <i></i>
            <i></i>
            <i></i>
        </div>
    </section>
    <footer class="container">
        <h3>All Rights Reserved - 2023</h3>
    </footer>
</body>
</html>