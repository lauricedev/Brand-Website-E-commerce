<?php
    include('connect.php');
    $item_id = $_GET['item_id'];
    $item_name = $_GET['item_name'];
    $item_type = $_GET['item_type'];
    $price = $_GET['price'];
    $size = $_GET['size'];
    $quantity = $_GET['quantity'];
    $total = $_GET['total'];
?>

<head>
        <title>DDHShirtz | UPDATE</title>
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
                    <a href="decor.html"><button class="dropbtn" href>DECOR</button></a>
                </div>
            </div>
        </div>   
    </div>
</div>
<br><br>
<form action='finalupdate.php' method='get'>
<div style='display: none'>
    <?php
    print "
        <input class='w3-input' type=text name=item_id value='$item_id' placeholder='1' required size='1' maxlength='92'>
        <input class='w3-input' type=text name=item_name value='$item_name' placeholder='1' required size='1' maxlength='92'>
        <input class='w3-input' type=text name=item_type value='$item_type' placeholder='1' required size='1' maxlength='92'>
        <input class='w3-input' type=text name=price value='$price' placeholder='1' required size='1' maxlength='92'>
        <input class='w3-input' type=text name=total value='$total' placeholder='1' required size='1' maxlength='92'>
        ";
    ?>
</div>
<center>
<?php
print "<img src='images/$item_id.jpg'>"
?>
<br><br>
<p style='font-family: font2; margin-bottom: -10px'><?php print "$item_name"?></p>
<br>
Sizes: &nbsp;
<select name='size' id='size'>
    <option value='XS'>Extra Small</option>
    <option value='S'>Small</option>
    <option value='M'>Medium</option>
    <option value='L'>Large</option>
    <option value='XL'>Extra Large</option>
</select>
<br><br>
Quantity: &nbsp;
<?php
    print "<input class='w3-input' type=text name=quantity value='$quantity' placeholder='1' required size='1' maxlength='2'>
    <br><br>
    <input type=submit value='Update' name=update style='width: 120px'> &nbsp;&nbsp;
    </form>";
    
    include('connect.php');
    if (isset($_GET['update']))  
    {
        include('connect.php');
        $a = $_GET['item_id'];
        $b = $_GET['item_name'];
        $c = $_GET['item_type'];
        $d = $_GET['price'];
        $e = $_GET['size'];
        $f = $_GET['quantity'];
        $g = $d * $f;
        //update for record 
        $sql =  "UPDATE cart SET size = '$e', quantity = '$f', total = $g WHERE item_id = '$a'";
        $result=mysqli_query($con,$sql);
        if ($result)
        {  //update record 
            echo '<script type="text/javascript">';
            echo ' alert("This has been updated 😎😎😎")';  //not showing an alert box.
            echo '</script>';
        }
    }
?>
</center>
