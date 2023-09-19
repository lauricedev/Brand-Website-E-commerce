<head>
        <title>DDHShirtz | THE COLD ONES NEON</title>
        <link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
        <link rel="stylesheet" href="finalproj.css">
        <script type="text/javascript" src="bootstrap\js\bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <link rel="icon" href="images/newlogo.png">
    </head>

<div class="container-fluid shopNav">
    <div>
    <!-- Nav Buttons -->
    <div class="row navStuff">
            <div class="col"></div>
            <div class="col">
                <a href="finalIndex.html"><img src="images/shop_logo.avif"></a>
            </div>
            <div class="col">
                <a href="#"><img src="images/search_icon.svg" class="icon"></a>
                <a href="#"><img src="images/user.svg" class="icon"></a>
                <a href="#"><img src="images/wishlist_icon.svg" class="icon"></a>
                <a href="cart.php"><img src="images/cart_icon.svg" class="icon"></a>
            </div>
        </div>
    
        <!-- Shop Categories -->
        <div class="row navStuff">
            <div class="col">
                <div class="dropdown">
                    <a href="tops.html"><button class="dropbtn" href>TOPS</button></a>
                </div>
                    
                <div class="dropdown">
                    <a href="bottoms.html"><button class="dropbtn">BOTTOMS</button></a>
                </div>
    
                <div class="dropdown">
                    <a href="accessories.html"><button class="dropbtn" href>ACCESSORIES</button></a>
                </div>
    
                <div class="dropdown">
                    <a href="decor.html"><button class="dropbtn current" href>DECOR</button></a>
                </div>
            </div>
        </div>   
    </div>
    </div>

<!-- Body -->

<div class="container">
    <div class="row ">
        <div class="col-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/decor1a.jpg" class="d-block w-100" alt="...">
                    </div>
                <div class="carousel-item">
                    <img src="images/decor1b.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/decor1c.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
        <div class="col-6 rightContainer">
            <p class="title">The Cold Ones Neon</p>
            <p class="price">₱20,100.00</p>

            <!-- Form -->
            <form action="decor1.php" method=get>
            <p style="font-family: font2;">Size: 
            <select name="size" id="size">
                <option value="XS">Extra Small</option>
                <option value="S">Small</option>
                <option value="M">Medium</option>
                <option value="L">Large</option>
                <option value="XL">Extra Large</option>
            </select>
            <br><br>
            Quantity: &nbsp;<input type="number" id="quantity" name="quantity" min="1" max="99" required></p>
            <button class="indexButton1" name="add">ADD TO CART</button>
            </form>
            
        </div>
    </div>
</div>


<?php
    if (isset($_GET['add'])){
        $a = 'decor1';
        $b = 'The Cold Ones Neon';
        $c = 'Decor';
        $d = 20100;
        $e = $_GET['size'];
        $f = $_GET['quantity'];
        $g = $d * $f;

        include ('connect.php');

        $insert="INSERT into cart values ('$a','$b','$c','$d','$e', '$f', '$g')";
        mysqli_query($con, $insert);  //connection and query
        echo '<script type="text/javascript">';
        echo ' alert("Added to cart 😎😎😎")';  //not showing an alert box.
        echo '</script>';
    }
?>
