<?php


if(isset($_POST['contact'])){
    $name = $_POST['name'];
    $vemail = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'mtra1234455@gmail.com';
    $headers = "From: " .$vemail;
    $email_body = "Name:" .$name."\n".
                "Email:" .$vemail."\n".
                    "Subject:" .$subject."\n".
                        "Message:" .$message."\n";
    mail($to,$headers,$email_body);

    header("Location: ../Contact.html?Mail Send");
}







