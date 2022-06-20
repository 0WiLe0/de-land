<!-- SENDING LETTER -->
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['text'];

	$to = ""; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Application from the site";

	
	$msg="
    NAME $name 
    EMAIL: $email
    MESSAGE: $text"; 	
	mail($to, $subject, $msg, "From: $from ");

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <style>
        *{
            margin: 0;
            padding: 0;
        }
        .container{
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form{
            width: 540px;
            border-radius: 10px;
        }
        h2 {
            text-align: center;
            font-family: 'Gilroy';
            font-style: normal;
            font-weight: 600;
            font-size: 20px;
            line-height: 30px;
            letter-spacing: 0.04em;
            color: #1F3F68;
        }
        a {
            display: flex;
            align-items: center;
            font-family: 'Gilroy';
            justify-content: center;
            width: 428px;
            height: 72px;
            filter: drop-shadow(5px 10px 20px rgba(16, 112, 177, 0.2));
            background-color: #5A98D0;
            border-radius: 10px;
            text-align: center;
            margin-top: 14%;
            color: WHITE;
            text-decoration: none;
            margin: 6% auto;
        } 
    </style>
    <div class="header">
        <div class="container">
            <div class="form">
                <h2>Your message successfully sent</h2>
                <a href="index.html">Back</a>
            </div>    
        </div>
    </div>
    </body>
    </html>

?>

<!-- RETURN PAGE -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="back.css">
    <title>de-land-back</title>
</head>
<body>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .container{
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form{
            width: 540px;
            border-radius: 10px;
        }
        h2 {
            text-align: center;
            font-family: 'Gilroy';
            font-style: normal;
            font-weight: 600;
            font-size: 20px;
            line-height: 30px;
            letter-spacing: 0.04em;
            color: #1F3F68;
        }
        a {
            display: flex;
            align-items: center;
            font-family: 'Gilroy';
            justify-content: center;
            width: 428px;
            height: 72px;
            filter: drop-shadow(5px 10px 20px rgba(16, 112, 177, 0.2));
            background-color: #5A98D0;
            border-radius: 10px;
            text-align: center;
            margin-top: 14%;
            color: WHITE;
            text-decoration: none;
            margin: 6% auto;
        } 
    </style>
    <div class="header">
        <div class="container">
            <div class="form">
                <h2>Your message successfully sent</h2>
                <a href="index.html">Back</a>
            </div>    
        </div>
    </div>
</body>
</html>