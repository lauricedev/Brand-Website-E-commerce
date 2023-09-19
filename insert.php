<!-- Head -->

<head>
    <title>DDHS | Insert</title>
    <link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="bootstrap\js\bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="images/newlogo.png">
    <style>
        body { 
            background: url(images/ACSSBG4.jpg) no-repeat center center fixed; 
            background-size: cover;
        }
    </style>

</head>

<!-- Nav Bar -->

<div class="container-fluid text-center navDDHS">
      <div class="row">
        <div class="col-2 nav-text"><a href="insert.php" class="nav-active">Insert</a></div>
        <div class="col-2 nav-text"><a href="display.php">Records</a></div>
        <div class="col-4"><a href="index.html"><img src="images/acss_logo.png" class="logo"></a></div>
        <div class="col-2 nav-text"><a href="search.php">Search/Update/Delete</a></div>
        <div class="col-2 nav-text"><a href="finalIndex.html">Final Project</a></div>
      </div>
    </div>

<!-- Body -->

<div class="container-fluid" style="padding-left: 100px; padding-top: 30px;">
    <div class="row">
        <div class="col-3" style="background-color: #262626;">
        <table style="width: 100%">
            <tr>
                <th>
                    <br><img src="images/newlogo.png" class="acssLogo" style="margin-left:-5px"> &nbsp; ACSS Registration Form 2022
                </th>
            <form action=insert.php method=get class="w3-container">
            <tr>
                <td><br></td>
            <tr>
                <td class="label">
                    <b>Student Number</b>
                </td>
		    <tr>
                <td colspan="2">
                    <input class="w3-input" type=text name=studnum placeholder="20193344787" required size="50" maxlength="25">
                </td>
            <tr>
                <td><br></td>
            <tr>
                <td class="label">
                    <b>Last Name</b>
                </td>
		    <tr>
                <td colspan="2">
                    <input class="w3-input" type=text name=lastname placeholder="Dela Cruz" required size="50" maxlength="25">
                </td>
            <tr>
                <td><br></td>
            <tr>
                <td class="label">
                    <b>First Name </b>
                </td>
		    <tr>
                <td colspan="2">
                    <input class="w3-input" type=text name=firstname placeholder="John" required size="50" maxlength="25">
                </td>
            <tr>
                <td><br></td>
    		<tr>
                <td class="label">
                    <b>Middle Name</b>
                </td>
		    <tr>
                <td colspan="2">
                    <input class="w3-input" type=text name=middlename placeholder="Santos" required size="50" maxlength="25">
                </td>
            <tr>
                <td><br></td>
		    <tr>
                <td class="label">
                    <b>Year Level</b>
                </td>
		    <tr>
                <td colspan="2">
                    <input class="w3-input" type=text name=yearlvl placeholder="4th Year" required size="50" maxlength="25">
                </td>
            <tr>
                <td><br></td>
		    <tr>
                <td class="label">
                    <b>Course</b>
                </td>
		    <tr>
                <td colspan="2">
                    <input class="w3-input" type=text name=course required placeholder="BSc A" size="50" maxlength="25">
                </td>
            <tr>
                <td><br></td>
		    <tr>
                <td class="label">
                    <b>Section</b>
                </td>
		    <tr>
                <td colspan="2">
                    <input class="w3-input" type=text  name=section placeholder="4H-1A" required size="50" maxlength="25">
                </td>
            <tr>
                <td><br></td>
		    <tr>
                <td class="label">
                    <b>Motto</b>
                </td>
		    <tr>
                <td colspan="2">
                    <input class="w3-input" type=text  name=motto placeholder="Hard word pays off" required size="50" maxlength="50">
                </td>
            <tr>
                <td><br></td>
		    <tr>
                <td class="label">
                    <b>Inspiration</b>
                </td>
		    <tr>
                <td colspan="2">
                    <input class="w3-input" type=text  name=inspiration placeholder="Parents" required size="50" maxlength="25">
                </td>
            <tr>
                <td><br></td>
		    <tr>
                <td class="label">
                    <b>Birthday</b>
                </td>
		    <tr>
                <td colspan="2">
                    <input class="w3-input" type=date name=birthday required size="50" maxlength="25">
                </td>
            <tr>
                <td><br></td>
            <tr>
                <td>
                    <center>
                        <input type=submit value='Insert' name=save style="width: 120px"> &nbsp;&nbsp; <input type=reset value='Clear' name=clear style="width: 120px">
                    </center>
                </td>
            </form>
            <tr>
                <td><br></td>
        </table>
        <?php
            // User Presses Insert
            if (isset($_GET['save']))  
            {
                $a=$_GET['studnum'];
                $b=$_GET['lastname'];
                $c=$_GET['firstname'];
                $d=$_GET['middlename'];
                $e=$_GET['yearlvl'];
                $f=$_GET['course'];
                $g=$_GET['section'];
                $h=$_GET['motto'];
                $i=$_GET['inspiration'];
                $j=$_GET['birthday'];
                include ('connect.php'); //include the connect.php
                //search for record 
                $search =  "Select * from register where (studnum='$a')";
                $result=mysqli_query($con,$search);
                $bilang=mysqli_num_rows($result);//bibilangin matched record/s
                if ($bilang==0)
                {  //insert new record 
                $insert="INSERT into register values ('$a','$b','$c','$d','$e', '$f','$g','$h','$i','$j')";
                mysqli_query($con, $insert);  //connection and query
                print "<br><center>Record added. Welcome to ACSS! 😎😎😎</center>";
                }
                else 
                    print "$a is already exists!!!";
            }
            ?>
        </div>
        <div class="col-9"></div>
    </div>
</div>
<br><br>

