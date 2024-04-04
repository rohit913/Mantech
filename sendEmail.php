<?php


// include "class.phpmailer.php"; // include the class name

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
//     $to = $_POST['email'];
//     $name = $_POST['name'];
//     $mobile = $_POST['phone'];
//     $message = "Name : $name Mobile : $mobile";

//     $pdfFile = $_FILES["cv"];

//     // Check if the file is a PDF
//     $fileType = strtolower(pathinfo($pdfFile["name"], PATHINFO_EXTENSION));
//     if ($fileType != "pdf") {
//         echo "Invalid file type. Please upload a PDF file.";
//         exit();
//     }
    
//     // $message = "Please find the attached PDF file.";

//     $mail = new PHPMailer();
    
//     $mail->IsSMTP();
//     $mail->Host = 'mail.mantech.in'; // Specify your SMTP server
//     $mail->Port = '25'; //Port of the SMTP like to be 25, 80, 465 or 587
//     $mail->SMTPAuth = true; //Whether to use SMTP authentication
//     $mail->SMTPSecure = "tls";
//     $mail->Username = 'hr@mantech.in'; // Your SMTP username
//     $mail->Password = 'HrMam12#2023'; // Your SMTP password
//     $mail->SetFrom($to, "Mantech"); //From address of the mail
//     $mail->IsHTML(true);
//     $mail->Subject = "Cv From $name"; //Subject od your mail
//     $mail->AddAddress("hr@mantech.in", "Mantech"); //To address who will receive this email 
//     $mail->MsgHTML($message);    
//     $mail->AddAttachment($pdfFile["tmp_name"], $pdfFile["name"]);    
//     $send = $mail->Send(); 
    
//     if($send == '1'){
//         echo "Your Information sent successfully ";
//     }else{
//         echo "Something Error...";
//     }

// } else {
//     echo "Invalid request method.";
// }


?>
