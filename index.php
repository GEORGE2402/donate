<?php
    session_start();
    $name = "A Company Name";
    global $name;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $name;?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="background-type">
        <div class="container type">
            <div class="header-top">
                <h1 style="text-align:center;"><?php echo $name;?>'s Donate Page</h1>
            </div>

            <h2 style="text-align:center;">Donate to us below!</h2>
            <img class="center-img" src="http://resonantmotion.org/wp-content/uploads/2013/11/donate-icon-title-03.png"
                width="440px" height="460px">
            <div class="justify-content-center center" style="text-align:center;">
                <ul class="nav nav-tabs justify-content-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Donation Options</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="donation.php?price=5">$5</a>
                            <a class="dropdown-item" href="donation.php?price=10">$10</a>
                            <a class="dropdown-item" href="donation.php?price=15">$15</a>
                            <a class="dropdown-item" href="donation.php?price=20">$20</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div style="text-align:center;">
            <h3>or</h3>
            <p>you can make your own donation number</p>
            <form class="form-inline justify-content-center" action="donation.php">
            <div class="form-group mx-sm-3 mb-2">
            <h2>$</h2>    
            <input type="number" class="form-control" name="price" min="0">
            </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>




</body>

</html>