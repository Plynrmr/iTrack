<?php
session_start();
   require "itmsheader.php"; 
    ?>

<!DOCTYPE html>
<html lang="en">
<title>Incident Management</title>
<link rel="stylesheet" href="assets/css/style.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<body>
     <br>
	 <br>
	 <h1 class="loginheader" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Incident Management Log</h1>
	 <div class="container">

        <div class="row">
        <div class="col-md-4">
        <div class="input-group">
        <input id="search" class="form-control py-2 border-right-0 border" type="text" placeholder="Search Ticket Number" class=form-control>
        <span class="input-group-append">
        <button class="btn btn-outline-secondary border-left-0 border" type="button">
        <i class="fa fa-search"></i>
        </button>
        </span>
        </div>
        </div>

        <button  type="newlog" id="newlog" class="btn btn-primary" formation="/homeitrack.php">
	    <a href= "addIncident.php" style="color:white;text-decoration:none"> New Log</a> <!--New Log page: to follow -->
        </button>
        &nbsp; &nbsp; &nbsp; <button  type="incidenthistory" id="incidenthistory" class="btn btn-primary" formation="/homeitrack.php">
	    <a href= "incidenthistory.php" style="color:white;text-decoration:none"> Incident History</a> <!--Incident History page: to follow -->
        </button>
        </div>
        <br>
 

        <div class="row">
        <div class="container">            
                <table class="table table-striped">
                <thead>
                    <th>Incident Ticket Number</th>
                    <th>Incident</th>
                    <th>Date and Time Created</th>
                    <th>Filed by</th>
                    <th>Incident Report</th>
                    <th>Date and Time Resolved</th>
                </thead>

                <tbody id="table-body"> 
                <tr>
                    <td> Insert Ticket Number</td>
                    <td> Insert incident</td>
                    <td> Insert Date and Time submitted</td>
                    <td> Insert the name who is log in  </td>
                    <td> Insert the "sumarry incident" from "Edit details" </td>
                    <td> Insert data and time resolved </td>
                    <td><a href='userview_incidenteditdetails.php?id=$id'>Edit Details</a></td>
                    </tr>
                </tbody>
                </table>
                </div>
                </div>
                 
</body>
</html>