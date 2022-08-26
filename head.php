<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/fav.svg">
    <title>Talent Stag</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light " style="position:sticky;top:0; background:#38454f;z-index:9999;">
        <a class="navbar-brand" href="index.php"><img src="img/logo.svg" class="logoimg"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse anish" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-auto">
                <li class="nav-item">
                    <a class="nav-link <?php if($page == 'index'){echo "active";}?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page == 'about'){echo "active";}?>" href="about-us.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page == 'ser'){echo "active";}?>" href="service.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page == 'con'){echo "active";}?>" href="contact.php">Contact us</a>
                </li>
            </ul>
                <?php if($page == 'login'){}else{?>
                <button class="btn btn-cus my-2 my-sm-0 px-4 py-2"> <a
                        type="button" style="color:white;text-decoration: none;"
                        href="login.php">LOGIN</a></button>
                        <?php }?>
        </div>
    </nav>