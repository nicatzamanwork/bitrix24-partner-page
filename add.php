<?php
include_once "config.php";

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


$type = $_POST['type'];


if($type == 1){

    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $company = htmlspecialchars(trim($_POST['company']));
    $message = htmlspecialchars(trim($_POST['message']));


    $sql = 'INSERT INTO bitrix_buta_contact (namesurname,email,phone,companyname,message)VALUES("'. $name .'","'. $email .'","'. $phone .'","'. $company .'","'. $message .'")';

    $query = mysqli_query($db, $sql);
     if ($query) {
        $mail = new PHPMailer(true);
        try {
            // Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
            $mail->isSMTP(); // Send using SMTP
            $mail->Host = 'smtp.yandex.com'; // Set the SMTP server to send through
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'webmaster@butagrup.com.tr'; // SMTP username
            $mail->Password = 'butamBT**.SrkETI'; // SMTP password
            $mail->Port = 465; // TCP port to connect to
            $mail->SMTPSecure = 'ssl';
            $mail->SMTPDebug = false;
    
            // Recipients 
            $mail->setFrom('webmaster@butagrup.com.tr','Buta Grup');
            $mail->addAddress('bitrix@butagrup.com.tr','Bitrix Buta Grup');
            // Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->CharSet = 'UTF-8';
            $mail->Subject = 'İletişim Formu';
            $mail->Body = 'Hörmətli Butagrup, sizə '.$name.' tərəfindən bir mesaj var<br/><br/><strong>Mesaj: </strong>'.$message.'<br/><strong>Şirkət: </strong>'.$company."<br/><strong>Telefon: </strong>".$phone."<br/><strong>E-mail: </strong>".$email;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            $mail->send();
            $mail->ClearAddresses();
            header('Location: /');
            exit;
            
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        header('Location: /');
     } else {
         echo mysqli_error($db);
     }
     header('Location: /');
}

if($type == 2){

    $name = "Bulleten";
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = "Bulleten";
    $company = "Bulleten";
    $message = "Bulleten";

    
    $sql = 'INSERT INTO bitrix_buta_contact (namesurname,email,phone,companyname,message)VALUES("'. $name .'","'. $email .'","'. $phone .'","'. $company .'","'. $message .'")';

    $query = mysqli_query($db, $sql);
     if ($query) {
        $mail = new PHPMailer(true);
        try {
            // Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
            $mail->isSMTP(); // Send using SMTP
            $mail->Host = 'smtp.yandex.com'; // Set the SMTP server to send through
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'webmaster@butagrup.com.tr'; // SMTP username
            $mail->Password = 'butamBT**.SrkETI'; // SMTP password
            $mail->Port = 465; // TCP port to connect to
            $mail->SMTPSecure = 'ssl';
            $mail->SMTPDebug = false;
    
            // Recipients 
            $mail->setFrom('webmaster@butagrup.com.tr','Buta Grup');
            $mail->addAddress('bitrix@butagrup.com.tr','Bitrix Buta Grup');
            // Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->CharSet = 'UTF-8';
            $mail->Subject = 'İletişim Formu';
            $mail->Body = 'Hörmətli Butagrup, sizə '.$name.' tərəfindən bir mesaj var<br/><br/><strong>Mesaj: </strong>'.$message.'<br/><strong>Şirkət: </strong>'.$company."<br/><strong>Telefon: </strong>".$phone."<br/><strong>E-mail: </strong>".$email;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            $mail->send();
            $mail->ClearAddresses();
            header('Location: /');
            exit;
            
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        header('Location: /');
     } else {
         echo mysqli_error($db);
     }
     header('Location: /');

}

?>