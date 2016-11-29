<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['contact'])) {$name = $_POST['contact'];}
    if (isset($_POST['email'])) {$email = $_POST['email'];}

    $to = "your-email@mail.us"; /*Укажите адрес, га который должно приходить письмо*/
    $sendfrom   = "test@polishlawyer.us"; /*Укажите адрес, с которого будет приходить письмо, можно не настоящий, нужно для формирования заголовка письма*/
    $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    $subject = "Feedback from dev.polishlawyer.us";
    $message = "<b>Telephone:</b> $name <br>
                <b>E-mail:</b> $email <br>";
    $send = mail ($to, $subject, $message, $headers);
}
?>