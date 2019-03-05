<?php
	require "viewingheader.php";
?>
<?php
   include_once 'includes/admin.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>iTrack</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style>


</style>

<body>
	<br>
	<br>
	<br>
	<br>
    <div class="container">

                    

        </div>

        <div class="row">
            <div class="container">
            	<table id="myTable">
                <table class="table table-striped">
                    <thead>
                        <th>Blotter Entry Number</th>
                        <th>Offense</th>
                        <th>Date Committed</th>
                        <th>Status</th>
                        <th>Investigator on Case</th>
                        <th>Remarks</th>
                    </thead>
                    <tbody>
                        <?php
                        # Hindi pa talaga to yung gagamitin natin kasi dapat daw nakaJS something 
                        $sql = "SELECT* FROM compview WHERE benNum='2';";
                        $select_case = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($select_case))
                        {
                            $benNum = $row['benNum'];
                            $compOffense = $row['compOffense'];
                            $dateComi = $row['dateComi'];
                            $compStatus = $row['compStatus'];
                            $compInv = $row['compInv'];
                            $compRemarks = $row['compRemarks'];
                            $dateCompl= $row['dateCompl'];
                            #`benNum`, `compOffense`, `dateComi`, `compStatus`, `compInv`, `compRemarks`, `dateCompl`

                            echo"<tr>";
                            echo "<td> $benNum </td>";
                            echo "<td> $compOffense </td>";
                            echo "<td> $dateComi </td>";
                            echo "<td> $compStatus </td>";
                            echo "<td> $compInv </td>";
                            echo "<td> $compRemarks </td>";
                            echo "<td> $dateCompl </td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
                </table>
            </div>
        </div>

    </div>
    
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    

</body>

</html>


<?php
	require "viewingfooter.php";

?>