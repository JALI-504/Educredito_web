<?php
  $parametro =$_POST['parameter'];
  
  $mailto = $_POST['mail'];
  $filename  = "brochere.pdf";
  $path      = "../documents/";
  $file      = $path . $filename;
  $file_size = filesize($file);
  $handle    = fopen($file, "r");
  $content   = fread($handle, $file_size);
  fclose($handle);

  $content = chunk_split(base64_encode($content));
  $uid     = md5(uniqid(time()));
  $name    = basename($file);

  $eol     = PHP_EOL;
  $subject = "Financiamos tu Educación Universitaria";
  $message = '<h1>Hola!!</h1>';
  $message .= '<p>Es un placer Saludarte en este día.</p>';
  $message .= '<p>Recibimos tus datos que dejaste en la página de Educredito, me da mucho gusto saber que estás interesado en cumplir tu metas académicas</p>';
  $message .= '<p>Aqui te enviamos un documento adjunto donde podras encontrar toda la información que necesitas.</p>';
  
  $from_name = "Instituto de Crédito Educativo";
  $from_mail = "info@educredito.gob.hn";
  $replyto = "info@educredito.gob.hn";

  
  $header    = "From: " . $from_name . " <" . $from_mail . ">\n";
  $header .= "Reply-To: " . $replyto . "\n";
  $header .= "MIME-Version: 1.0\n";
  $header .= "Content-Type: multipart/mixed; boundary=\"" . $uid . "\"\n\n";
  $emessage = "--" . $uid . "\n";
  $emessage .= "Content-type:text/html; charset=iso-8859-1\n";
  $emessage .= "Content-Transfer-Encoding: 7bit\n\n";
  $emessage .= $message . "\n\n";
  $emessage .= "--" . $uid . "\n";
  $emessage .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"\n"; // use different content types here
  $emessage .= "Content-Transfer-Encoding: base64\n";
  $emessage .= "Content-Disposition: attachment; filename=\"" . $filename . "\"\n\n";
  $emessage .= $content . "\n\n";
  $emessage .= "--" . $uid . "--";
  
  mail($mailto, $subject, $emessage, $header);
  if ($parametro==100) {
    header("Location:../?mensaje=1");
  }
  if ($parametro==200) {
    header("Location:nosotros.php?mensaje=1");
  }
  if ($parametro==300) {
    header("Location:financiamiento.php?mensaje=1");
  }
  if ($parametro==400) {
    header("Location:requisitos.php?mensaje=1");
  }
  if ($parametro==500) {
    header("Location:convenios.php?mensaje=1");
  }
  if ($parametro==600) {
    header("Location:contactenos.php?mensaje=1");
  }
?>