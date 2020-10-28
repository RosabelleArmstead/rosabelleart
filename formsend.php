<?php
    $to = "rosabelle.art@gmail.com";
    $print = $_POST["print"];
    $name = $_POST["firstname"] . " " . $_POST["lastname"];
    
    $subject = "Print Enquiry: $print; $name";

    $address = $_POST["address1"] . "\n" . $_POST["address2"] . "\n" . $_POST["city"] . "\n" . $_POST["county"] . "\n" . $_POST["postcode"] . "\n" . $_POST["country"];
    $email = $_POST["email"];
    $comments = $_POST["comments"];
    
    $message = "
    <html>
    <head>
    <title>HTML email</title>
    </head>
    <body>
    <p>$subject</p>
    <table>
    <tr>
    <th>Name</th>
    <th>Print</th>
    <th>Email</th>
    </tr>
    <tr>
    <td>$name</td>
    <td>$print</td>
    <td>$email</td>
    </tr>
    </table>
    <div>
    <h3>Address</h3>
    <p>$address</p>
    <h3>Comments</h3>
    <p>$comments</p>
    </div>
    </body>
    </html>
    ";
    
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // More headers
    $headers .= "From: $email" . "\r\n";
    
    mail($to,$subject,$message,$headers);
?>