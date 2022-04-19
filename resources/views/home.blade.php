<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="css/navbar.css">

</head>
<body>
    <section class="header row" id="fullmenu">
        <nav class="navbar navbar-expand-lg d-flex navbarcss">
            <div class="container-fluid col-4 menu">
                <i class="fa-solid fa-bars navbar-toggler menu-toggle" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"></i>
                <div class="collapse navbar-collapse  menu-item" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link " href="">Home</a>
                        <a class="nav-link " href="">Product</a>
                        <a class="nav-link" href="">Contact</a>
                    </div>
                </div>
            </div>
            <div class="col-4 justify-content-center text-center logo "> <a>G FASHION</a></div>
            <div class="col-4 " id="login"> 
                <div class="navbar-nav justify-content-center pro_cart">
                    <a class="nav-link float-right " ><i class="fa-solid fa-cart-shopping"></i></a>
                    <a class="nav-link " href=""><i class="fa-solid fa-user"></i></a>
                </div>
        </nav>
    </section>
@yield('navbar')    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/navbar.js"></script>
</body>
</html>

