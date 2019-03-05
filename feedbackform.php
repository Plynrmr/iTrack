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
    <center>
        <form method="GET" id="form">
         <b>1. Ano ang masasabi mo sa pag proseso ng inyong report? 
         <br>
         (What can you say about the processing of the report?)</b>
         <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="napakahusay1" id="radio1" value="napakahusay"> 
                <label class="form-check-label" for="napakahusay">
                Napakahusay
                </label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="mahusay" id="radio2" value="mahusay1">
                <label class="form-check-label" for="mahusay">
                Mahusay
                </label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="hindimahusay" id="option3" value="hindimahusay1">
                <label class="form-check-label" for="hindimahusay">
                Hindi Mahusay
                </label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="nangangailangan1" id="questionthree" value="nangangailangan1">
                <label class="form-check-label" for="nangangailangan">
                Nangangailangan ng Pagbabago
                </label>
            </div>
            <br>
            <br>

            <b>2. Kumusta ang pakikitungo sayo ng mga police-in-charge
            <br>
            (How well did the police accomodate you?)</b>
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="napakahusay2" id="radio1" value="napakahusay2">
                <label class="form-check-label" for="napakahusay">
                Napakahusay
                </label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="mahusay2" id="radio2" value="mahusay2">
                <label class="form-check-label" for="mahusay">
                Mahusay
                </label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="hindimahusay2" id="radio3" value="hindimahusay2">
                <label class="form-check-label" for="hindimahusay">
                Hindi Mahusay
                </label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="nangangailangan2" id="radio4" value="nangangailangan2">
                <label class="form-check-label" for="nangangailangan">
                Nangangailangan ng Pagbabago
                </label>
            </div>
            <br>
            <br>

            <b>3. Sa kabuuan, ano ang masasabi mo sa serisyo ng mga police na nag-aasikaso sayo? 
            <br>
            (What can you say about the service of the police-in-charged who accomodated you?)</b>
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="napakahusay3" id="radio1" value="napakahusay3">
                <label class="form-check-label" for="napakahusay">
                Napakahusay
                </label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="mahusay3" id="radio2" value="mahusay3">
                <label class="form-check-label" for="mahusay">
                Mahusay
                </label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="hindimahusay3" id="option3" value="hindimahusay3">
                <label class="form-check-label" for="hindimahusay">
                Hindi Mahusay
                </label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="nangangailangan3" id="questionthree" value="nangangailangan3">
                <label class="form-check-label" for="nangangailangan">
                Nangangailangan ng Pagbabago
                </label>
            </div>
            <br>
            <br>
            <div class="form-group">
            <b> Komento at Suhestiyon? (Comments and Suggestions) </b>
            <br>
            <textarea name="comment" rows="5" cols="50" value="comment"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </center>

<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>


<?php
	require "viewingfooter.php";
?>
