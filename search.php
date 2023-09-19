<!-- Head -->

<head>
    <title>DDHS | Search/Update/Delete</title>
    <link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="bootstrap\js\bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="images/newlogo.png">

</head>

<!-- Nav Bar -->

<div class="container-fluid text-center navDDHS">
      <div class="row">
        <div class="col-2 nav-text"><a href="insert.php">Insert</a></div>
        <div class="col-2 nav-text"><a href="display.php">Records</a></div>
        <div class="col-4"><a href="index.html"><img src="images/acss_logo.png" class="logo"></a></div>
        <div class="col-2 nav-text"><a href="search.php" class="nav-active">Search/Update/Delete</a></div>
        <div class="col-2 nav-text"><a href="finalIndex.html">Final Project</a></div>
      </div>
</div>

<!-- Body -->

<body style="background-color: #0D0D0D">

<center>
    <div class="container-fluid" style="padding-top: 100px">
        <form action=search.php method=get>
            <input class="col-sm-4" type=search placeholder='Enter a search term' name=keyword required>
            <input class="col-sm-1" type=submit value='Search' name=search>
        </form>
    </div>
</center>

<div class="container-fluid" style="padding-top: 50px">
    <table class="recordsTable " align="center">
        <tr class="recordsHead" height='80px' style="border-radius: 15px">
            <td width="8.33333333333%">Student #</td>
            <td width="8.33333333333%">Last Name</td>
            <td width="8.33333333333%">First Name</td>
            <td width="8.33333333333%">Middle Name</td>
            <td width="8.33333333333%">Year Level</td>
            <td width="8.33333333333%">Course</td>
            <td width="8.33333333333%">Section</td>
            <td width="8.33333333333%">Motto</td>
            <td width="8.33333333333%">Inspiration</td>
            <td width="8.33333333333%">Birthday</td>
            <td width="8.33333333333%">Update</td>
            <td width="8.33333333333%">Delete</td>

        <?php

        if (isset($_GET['search'])){
            include ('connect.php');
            $search = $_GET['keyword'];
            $q =  "select * from register where studnum like '%$search%' or lastname like '%$search%' or firstname like '%$search%' or middlename like '%$search%' or yearlvl like '%$search%' or course like '%$search%' or section like '%$search%' order by lastname";
		    $result=mysqli_query($con,$q); //execution of query
		    $bilang=mysqli_num_rows($result);//bibilangin matched record/s
            
            if ($bilang == 0){
                print ("<center>No Record/s found</center>");
            }
            else {
                while ($record=mysqli_fetch_array($result))
                {
                $a = $record['studnum'];
                $b = $record['lastname'];
                $c = $record['firstname'];
                $d = $record['middlename'];
                $e = $record['yearlvl'];
                $f = $record['course'];
                $g = $record['section'];
                $h = $record['motto'];
                $i = $record['inspiration'];
                $j = $record['birthday'];

                print "<tr height='80px' style='background-color: #222222; color: #999999'>
                        <td>$a</td>
                        <td>$b</td>
                        <td>$c</td>
                        <td>$d</td>
                        <td>$e</td>
                        <td>$f</td>
                        <td>$g</td>
                        <td>$h</td>
                        <td>$i</td>
                        <td>$j</td>
                        <td>
                            <a href='update.php?studnum=$a'>
                            <button type=submit name=update style='border: 0; background: transparent'>
                            <img src='images/edit.png'/>
                            </button>
                            </a>
                        </td>
                        <td>
                            <a href='search.php?studnum=$a'>
                                <button type=submit name=delete style='border: 0; background: transparent'>
                                <img src='images/delete.png'>
                                </button>
                            </a>
                        </td>";
                }
            }
            print "</table> <center><br> $bilang Total Record/s</center>";
        }
        ?>
    </table>
    <br><br>
</div>

<?php
    if(isset($_GET['studnum']))
    {
        include ("connect.php");
        $a = $_GET['studnum'];
        $sql = "DELETE FROM register WHERE studnum = '$a' ";
        $result = mysqli_query($con,$sql);
        if($result)
            {
                print "<center>Record deleted.</center>";
            }
    }
?>