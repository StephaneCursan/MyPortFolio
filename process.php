<?php

  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  if (isset($_POST['email']) && $_POST['email'] != "") {
    $from = "moimeme@gmail.com";
    // $to = "lacroix.mathias@free.fr";
    $to = "stephane.cursan@orange.fr";
    $subject = $_POST['subject'];
    $msgCopy = !empty($_POST['msgCopy']) ? $_POST['msgCopy'] : NULL;
    $header = "From: ".$from;

    $message = $_POST['message'];
    // $message .= "De : ".$_POST['email'].".Objet : ".$subject.", ".$message;

    mail($to, $subject, $message, $header);

    var_dump($to);
    var_dump($subject);
    var_dump($message);
    echo "\n";
    var_dump($msgCopy);
    echo "\n";
    var_dump($header);
    echo "\n";
    var_dump(mail($to, $subject, $message, $header));
    echo "\n";
    echo $to.' ',$subject.' ',$message.' ',$header;

  }
  
?>