<?php

  $receiving_email_address = 'tecnica@applogik.pt';
 
  if(isset($_POST['btnC']))
  {
    $to = $receiving_email_address;
    $from_name = $_POST['name'];
    $from_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
  
    $headers = "From: ".$from_email;
    $txt = "Recebeu um email de ".$from_name.".\n\n".$message;
    
    mail($to, $subject, $txt, $headers)

  }
 

?>
