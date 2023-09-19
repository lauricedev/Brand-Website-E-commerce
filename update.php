<?php
    include('connect.php');
    $person_id = $_GET['studnum'];
    $sql = "SELECT * from register where studnum = '$person_id'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
        $person_id = $row['studnum'];
        $lastname = $row['lastname'];
        $first = $row['firstname'];
        $middle = $row['middlename'];
        $yearlvl = $row['yearlvl'];
        $course = $row['course'];
        $section = $row['section'];
        $motto = $row['motto'];
        $inspiration = $row['inspiration'];
        $birthday = $row['birthday'];
?>

<!-- Head -->

<head>
    <title>DDHS | Update</title>
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
        <div class="col-2 nav-text"><a href="insert.php">Insert</a></div>
        <div class="col-2 nav-text"><a href="display.php">Records</a></div>
        <div class="col-4"><a href="index.html"><img src="images/acss_logo.png" class="logo"></a></div>
        <div class="col-2 nav-text"><a href="search.php" class="nav-active">Search/Update/Delete</a></div>
        <div class="col-2 nav-text"><a href="finalIndex.html">Final Project</a></div>
      </div>
</div>

<!-- Body -->

<div class="container-fluid" style="padding-left: 100px; padding-top: 30px;">
    <div class="row">
        <div class="col-3" style="background-color: #262626;">
        <?php
            print "<table style='width: 100%'>
            <tr>
                <th>
                    <br><img src='images/newlogo.png' class='acssLogo' style='margin-left:-5px'> &nbsp; Update Record
                </th>
            <form action=update.php method=get class='w3-container'>
            <tr>
                <td><br></td>
            <tr>
                <td class='label'>
                    <b>Student Number</b>
                </td>
		    <tr>
                <td colspan='2'>
                    <input class='w3-input' type=text name=studnum value='$person_id' placeholder='20193344787' required size='50' maxlength='25'>
                </td>
            <tr>
                <td><br></td>
            <tr>
                <td class='label'>
                    <b>Last Name</b>
                </td>
		    <tr>
                <td colspan='2'>
                    <input class='w3-input' type=text name=lastname value='$lastname' placeholder='Dela Cruz' required size='50' maxlength='25'>
                </td>
            <tr>
                <td><br></td>
            <tr>
                <td class='label'>
                    <b>First Name </b>
                </td>
		    <tr>
                <td colspan='2'>
                    <input class='w3-input' type=text name=firstname value='$first' placeholder='John' required size='50' maxlength='25'>
                </td>
            <tr>
                <td><br></td>
    		<tr>
                <td class='label'>
                    <b>Middle Name</b>
                </td>
		    <tr>
                <td colspan='2'>
                    <input class='w3-input' type=text name=middlename value='$middle' placeholder='Santos' required size='50' maxlength='25'>
                </td>
            <tr>
                <td><br></td>
		    <tr>
                <td class='label'>
                    <b>Year Level</b>
                </td>
		    <tr>
                <td colspan='2'>
                    <input class='w3-input' type=text name=yearlvl value='$yearlvl' placeholder='4th Year' required size='50' maxlength='25'>
                </td>
            <tr>
                <td><br></td>
		    <tr>
                <td class='label'>
                    <b>Course</b>
                </td>
		    <tr>
                <td colspan='2'>
                    <input class='w3-input' type=text name=course value='$course' required placeholder='BSc A' size='50' maxlength='25'>
                </td>
            <tr>
                <td><br></td>
		    <tr>
                <td class='label'>
                    <b>Section</b>
                </td>
		    <tr>
                <td colspan='2'>
                    <input class='w3-input' type=text  name=section value='$section' placeholder='4H-1A' required size='50' maxlength='25'>
                </td>
            <tr>
                <td><br></td>
		    <tr>
                <td class='label'>
                    <b>Motto</b>
                </td>
		    <tr>
                <td colspan='2'>
                    <input class='w3-input' type=text  name=motto value='$motto' placeholder='Hard word pays off' required size='50' maxlength='50'>
                </td>
            <tr>
                <td><br></td>
		    <tr>
                <td class='label'>
                    <b>Inspiration</b>
                </td>
		    <tr>
                <td colspan='2'>
                    <input class='w3-input' type=text  name=inspiration value='$inspiration' placeholder='Parents' required size='50' maxlength='25'>
                </td>
            <tr>
                <td><br></td>
		    <tr>
                <td class='label'>
                    <b>Birthday</b>
                </td>
		    <tr>
                <td colspan='2'>
                    <input class='w3-input' type=date name=birthday value='$birthday' required size='50' maxlength='25'>
                </td>
            <tr>
                <td><br></td>
            <tr>
                <td>
                    <center>
                        <input type=submit value='Update' name=update style='width: 120px'> &nbsp;&nbsp; <input type=reset value='Clear' name=clear style='width: 120px'>
                    </center>
                </td>
            </form>
            <tr>
                <td><br></td>
        </table> <br><br>";

        include('connect.php');
        if (isset($_GET['update']))  
        {
            include('connect.php');
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
            //update for record 
            $sql =  "UPDATE register SET lastname = '$b', firstname = '$c', middlename = '$d', yearlvl = '$e', course = '$f',section = '$g', motto = '$h', inspiration = '$i', birthday = '$j' WHERE studnum = '$person_id'";
            $result=mysqli_query($con,$sql);
            if ($result)
            {  //update record 
                print "<br><center>Record updated. 😎😎😎</center>";
            }
        }

        ?>
        </div>
        <div class="col-9"></div>
    </div>
</div>
<br><br>
