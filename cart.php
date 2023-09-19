<head>
        <title>DDHShirtz | THE CART</title>
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

<center>
    <div class="container-fluid" style="padding-top: 100px">
        <form action=cart.php method=get>
            <input class="col-sm-4" type=search placeholder='Enter a search term' name=keyword required>
            <input class="col-sm-1" type=submit value='Search' name=search>
        </form>
    </div>
</center>

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
            <td>Delete</td>

    <?php

        if(isset($_GET['search'])){
            include ('connect.php');
            $search = $_GET['keyword'];
            $q = "select * from cart where item_name like '%$search%' or item_type like '%$search%' or price like '%$search%' or size like '%$search%';";
            $result=mysqli_query($con,$q); //execution of query
            $bilang=mysqli_num_rows($result);//bibilangin matched record/s

            if ($bilang == 0){
                print ("<center>No Record/s found</center>");
            }
            while ($record=mysqli_fetch_array($result)){
                $a = $record['item_id'];
                $b = $record['item_name'];
                $c = $record['item_type'];
                $d = $record['price'];
                $e = $record['size'];
                $f = $record['quantity'];
                $g = $record['total'];

                print "<tr height='80px' style='background-color: #E6E6E6; color: #1c1c1c;'>
                    <td><img class='imgCart' src='images/$a.jpg'></td>
                    <td>$b</td>
                    <td>$c</td>
                    <td>$d</td>
                    <td>$e</td>
                    <td>$f</td>
                    <td>$g</td>
                    <td>
                            <a href='finalupdate.php?item_id=$a&item_name=$b&item_type=$c&price=$d&size=$e&quantity=$f&total=$g'>
                            <button type=button name=update style='border: 0; background: transparent' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                            <img src='images/edit.png' style='filter: invert(100%);'/>
                            </button>
                            </a>
                    </td>
                    <td>
                            <a href='cart.php?item_id=$a&size=$e&quantity=$f&total=$g'> 
                                <form action='cart.php' method='post'>
                                <button type=submit name=delete style='border: 0; background: transparent'>
                                <img src='images/delete.png' style='filter: invert(100%);'/>
                                </button>
                                </form>
                            </a>
                        </td>";
            }
        }

        else {
            include('connect.php');
        $q = "select * from cart";
        $result=mysqli_query($con,$q);
        $bilang=mysqli_num_rows($result);//bibilangin matched record/s
            
        if ($bilang == 0){
            print ("<center>No Record/s found</center>");
        }

        else {
            while ($record=mysqli_fetch_array($result)){
                $a = $record['item_id'];
                $b = $record['item_name'];
                $c = $record['item_type'];
                $d = $record['price'];
                $e = $record['size'];
                $f = $record['quantity'];
                $g = $record['total'];

                print "<tr height='80px' style='background-color: #E6E6E6; color: #1c1c1c;'>
                    <td><a href='$a.php'><img class='imgCart' src='images/$a.jpg'></a></td>
                    <td>$b</td>
                    <td>$c</td>
                    <td>$d</td>
                    <td>$e</td>
                    <td>$f</td>
                    <td>$g</td>
                    <td>
                            <a href='finalupdate.php?item_id=$a&item_name=$b&item_type=$c&price=$d&size=$e&quantity=$f&total=$g'>
                            <button type=button name=update style='border: 0; background: transparent' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                            <img src='images/edit.png' style='filter: invert(100%);'/>
                            </button>
                            </a>
                    </td>
                    <td>
                            <a href='cart.php?item_id=$a&size=$e&quantity=$f&total=$g'>
                                <button type=submit name=delete style='border: 0; background: transparent'>
                                <img src='images/delete.png' style='filter: invert(100%);'/>
                                </button>
                            </a>
                        </td>";
            }
        }
        }
    ?>
        <tr>
            <td colspan="9">
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-4"></div>
                        <
                        <div class="col-4" style=''>
                            <br>
                            <form action=cart.php method=get>
                                <button type=submit name=buy style='background-color: #F0684B; height: 75px; width: 50%; font-family: font1'>
                                BUY NOW
                                </button>
                            </form>
                        </div>
                        <div class="col-4"></div>
                    </div>
                </div>
            </td>
    </table>
    <br><br>
</div>

<?php
    if(isset($_GET['item_id']))
    {
        include ("connect.php");
        $a = $_GET['item_id'];
        $e = $_GET['size'];
        $f = $_GET['quantity'];
        $g = $_GET['total'];

        $sql = "DELETE FROM cart WHERE item_id = '$a' and size = '$e' and quantity = '$f' ";
        $result = mysqli_query($con,$sql);
        if($result)
            {
                echo '<script type="text/javascript">';
                echo ' alert("Record Deleted. Please refresh the page 😎😎😎")';  //not showing an alert box.
                echo '</script>';
            }
    }

    if(isset($_GET['buy']))
    {
        include ("connect.php");

        $sql = "DELETE FROM cart";
        $result = mysqli_query($con,$sql);
        if($result)
            {
                echo '<script type="text/javascript">';
                echo 'alert("Item/s are en route to your location 😎😎😎")';  //not showing an alert box.
                echo '</script>';
            }
    }
    
?>