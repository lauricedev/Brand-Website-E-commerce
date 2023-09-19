<!-- Head -->

<head>
    <title>DDHS | Display</title>
    <link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="bootstrap\js\bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="images/newlogo.png">
    <style>
        html, body {
            background-color: #0D0D0D;
            margin: 0;
            height: 100%;
        }
    </style>

</head>

<!-- Nav Bar -->

<div class="container-fluid text-center navDDHS">
      <div class="row">
        <div class="col-2 nav-text"><a href="insert.php">Insert</a></div>
        <div class="col-2 nav-text"><a href="display.php" class="nav-active">Records</a></div>
        <div class="col-4"><a href="index.html"><img src="images/acss_logo.png" class="logo"></a></div>
        <div class="col-2 nav-text"><a href="search.php">Search/Update/Delete</a></div>
        <div class="col-2 nav-text"><a href="finalIndex.html">Final Project</a></div>
      </div>
</div>

<!-- Body -->
<div class="container-fluid" style="padding-top: 100px; background-color: #0D0D0D">
    <table class="recordsTable " align="center">
        <tr class="recordsHead" height='80px' style="border-radius: 15px">
            <td width="10%">Student #</td>
            <td width="10%">Last Name</td>
            <td width="10%">First Name</td>
            <td width="10%">Middle Name</td>
            <td width="10%">Year Level</td>
            <td width="10%">Course</td>
            <td width="10%">Section</td>
            <td width="10%">Motto</td>
            <td width="10%">Inspiration</td>
            <td width="10%">Birthday</td>

        <?php
		include ('connect.php');
		$search =  "Select * from register order by studnum asc";
		$result=mysqli_query($con,$search);
		$bilang=mysqli_num_rows($result);//bibilangin matched record/s
		while ($record=mysqli_fetch_array($result)) {
		
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

		    print("<tr height='80px' style='background-color: #222222; color: #999999'>
                        <td>$a</td>
                        <td>$b</td>
                        <td>$c</td>
                        <td>$d</td>
                        <td>$e</td>
                        <td>$f</td>
                        <td>$g</td>
                        <td>$h</td>
                        <td>$i</td>
                        <td>$j</td>");
		}
		print("</table> <center><br> $bilang Total Record/s</center>");
        ?>
    </table>
    <br><br>
</div>
