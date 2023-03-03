<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="kelompok 10" content="WEBSITE about HTML,Css,PHP,JavaScript">
    <title>Support</title>
    <style type="text/css">
        
        body { 
            background-color: #986EF6; 
            padding: 50px;
            margin: 50px;
            font-size: 20px;
        }
        .subject{
            border: 1px solid #C66FC6;
            display: inline-block;
            background-color: #C66FC6;
            line-height: 30px;
            padding: 50px;
            margin: 50px;
        }
    </style>
</head>
<body >
    <div class="subject">
    	<?php
          $firstname = $_POST['firstname'];
          $email = $_POST['email'];
          $Subject = $_POST['Subject'];

            echo("Nama    : $firstname <br>");
            echo("E-mail  : $email <br>");
            echo("Subject : $Subject<br>");
            echo("<br><br>Terimakasih telah berkunjung ke halaman Website YOo.id");

            
       ?>
    </div>
	
</body>
</html>