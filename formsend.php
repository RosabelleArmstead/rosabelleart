<?php
    $to = "rosabelle.art@gmail.com";
    $print = $_POST["print"];
    $name = $_POST["firstname"] . " " . $_POST["lastname"];
    $printtype = $_POST["printtype"];
    
    $subject = "Print Enquiry: $print; $name";

    $address = $_POST["address1"] . ",<br>" . $_POST["address2"] . ",<br>" . $_POST["city"] . ",<br>" . $_POST["county"] . ",<br>" . $_POST["postcode"] . ",<br>" . $_POST["country"];
    $email = $_POST["email"];
    $comments = $_POST["comments"];
    
    $message = "
    <html>
    <head>
    <title>HTML email</title>
    </head>
    <body>
    <table style='font-family: Arial, Helvetica, sans-serif;
    width: 100%;'>
    <tr style='border: 1px solid #ddd;
    text-align: left;
    background-color: #ae78cf;
    color: white;'>
    <th style='padding: 10px;'>Name</th>
    <th style='padding: 10px;'>Print</th>
    <th style='padding: 10px;'>Print Size</th>
    <th style='padding: 10px;'>Email</th>
    </tr>
    <tr>
    <td style='padding: 10px;
    background-color: #f0deff;'>$name</td>
    <td style='padding: 10px;
    background-color: #f0deff;'>$print</td>
    <td style='padding: 10px;
    background-color: #f0deff;'>$printtype</td>
    <td style='padding: 10px;
    background-color: #f0deff;'>$email</td>
    </tr>
    </table>
    <div>
    <br>
    <table style='font-family: Arial, Helvetica, sans-serif;
    width: 100%;'>
    <tr style='border: 1px solid #ddd;
    text-align: left;
    background-color: #ae78cf;
    color: white;'>
    <th style='padding: 10px;'>Address:</th>
    <tr>
    <td style='padding: 10px;
    background-color: #f0deff;'>$address</td>
    </tr>
    </table>
    <br>
    <table style='font-family: Arial, Helvetica, sans-serif;
    width: 100%;'>
    <tr style='border: 1px solid #ddd;
    text-align: left;
    background-color: #ae78cf;
    color: white;'>
    <th style='padding: 10px;'>Comments:</th>
    <tr>
    <td style='padding: 10px;
    background-color: #f0deff;'>$comments</td>
    </tr>
    </table>
    </div>
    </body>
    </html>
    ";
    
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // More headers
    $headers .= "From: $email" . "\r\n";

    $_SESSION['haspurchased'] = true; // a request has been attempted
    
    if (mail($to,$subject,$message,$headers)) {
        header('Location:gallery.php?msg=y');
    }
    else {
        header('Location:gallery.php?msg=n');
    }
?>