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
            <td>Edit</td>
            <td>Delete</td>

    <?php

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
                    <td><img class='imgCart' src='images/$a.jpg'></td>
                    <td>$b</td>
                    <td>$c</td>
                    <td>$d</td>
                    <td>$e</td>
                    <td>$f</td>
                    <td>$g</td>
                    <td>
                            <a href='fedit.php?item_id=$a'>
                            <button type=submit name=edit style='border: 0; background: transparent'>
                            <img src='images/edit.png'/>
                            </button>
                            </a>
                    </td>
                    <td>
                            <a href='fdelete.php?item_id=$a'>
                                <button type=submit name=delete style='border: 0; background: transparent'>
                                <img src='images/delete.png'>
                                </button>
                            </a>
                        </td>";
                
                if(isset($_GET['delete']))
                {
                    include ('connect.php');
                    $a = $_GET['deleteid'];
                    $sql = "DELETE FROM cart WHERE item_id = $a ";
                    $result = mysqli_query($con,$sql);
                    if($result)
                    {
                        print "<center>Record deleted.</center>";
                    }
                }
            }
        }
    ?>
    </table>
    <br><br>
</div>