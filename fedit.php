<head>
        <title>DDHShirtz | THE HYDRATE BOTTLE</title>
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
            <div class="col-4"></div>
            <div class="col-4">
                <a href="finalIndex.html"><img src="images/shop_logo.avif"></a>
            </div>
            <div class="col-2"></div>
            <div class="col-2">
                <img src="images/search_icon.svg" class="icon">
                <img src="images/user.svg" class="icon">
                <img src="images/wishlist_icon.svg" class="icon">
                <img src="images/cart_icon.svg" class="icon">
            </div>
        </div>
    
        <!-- Shop Categories -->
        <div class="row navStuff">
            <div class="col-2"></div>
            <div class="col-2"></div>
            <div class="col-4">
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
            <div class="col-2"></div>
            <div class="col-2"></div>
        </div>   
    </div>
</div>
<br><br>
<div class="container-fluid">
    <table class="cartTable" align="center" cellspacing="0" cellpadding="0">
        <tr class="cartHead" height="80px" style="border-radius: 15px">
            <td>Item</td>
            <td>Item Name</td>
            <td>Item Type</td>
            <td>Price</td>
            <td>Size</td>
            <td>Quantity</td>
            <td>Total</td>
            <td>Update</td>
            <td>Clear</td>
            
            <?php
            include('connect.php');
            $itemID = $_GET['item_id'];
            $sql = "SELECT * from cart where item_id = '$itemID'";
            $resultA = mysqli_query($con,$sql);
            $record = mysqli_fetch_array($resultA);
            $aa = $record['item_id'];
            $bb = $record['item_name'];
            $cc = $record['item_type'];
            $dd = $record['price'];
            $ee = $record['size'];
            $ff = $record['quantity'];
            $gg = $record['total'];
            
            print "<tr height='80px' style='background-color: #E6E6E6; color: #1c1c1c;'>
                    <td id='itemID'><img class='imgCart' src='images/$aa.jpg'></td>
                    <td id='itemName'>$bb</td>
                    <td id='itemType'>$cc</td>
                    <td id='itemPrice'>$dd</td>
                    <td id='itemSize'>
                        <select name='size' id='size'>
                            <option value='Extra Small'>Extra Small</option>
                            <option value='Small'>Small</option>
                            <option value='Medium'>Medium</option>
                            <option value='Large'>Large</option>
                            <option value='Extra Large'>Extra Large</option>
                        </select>
                    </td>
                    <td id='itemQuantity'>
                        <input type='number' id='quantity' name='quantity' min='1' max='99' required></input
                    </td>
                    <td id='itemTotal'>$gg</td>
                    <td>
                            
                            <input type=submit name=update style='border: 0; background: transparent'>
                            </input>
                    </td>
                    <td>
                            <input type=submit name=delete style='border: 0; background: transparent'>
                            </input>
                        </td>";
                
                    if (isset($_GET['update'])){
                    $a = $_GET['itemID'];
                    $b = $_GET['itemName'];
                    $c = $_GET['itemType'];
                    $d = $_GET['itemPrice'];
                    $e = $_GET['itemSize'];
                    $f = $_GET['itemQuantity'];
                    $g = $d * $f;

                    include ('connect.php');

                    $insert="UPDATE cart SET item_name = '$b', item_type = '$c', price = '$d', size = '$e', quantity = 'f', total = '$g' WHERE item_id = '$a'";
                    mysqli_query($con, $insert);  //connection and query
                    echo '<script type="text/javascript">';
                    echo ' alert("This has been updated 😎😎😎")';  //not showing an alert box.
                    echo '</script>';
    }
    ?>