<?php
session_start();
include 'connect.php';


$user=$_SESSION['Email'];
 $sqlArrayBind = array();
//$query = "SELECT * FROM sign where Email like'%$user%'";
$result = mysqli_query($con, "SELECT * FROM sign where Email like'%$user%'");
while($res = mysqli_fetch_array($result)) {
$us=$res['Username'];
$em=$res['Email'];
$ph=$res['Phone'];
$loc=$res['Locality'];
$acc=$res['Acc_type'];
}
echo "<body bgcolor=#fff1ed><h1>Your response has been submitted!!</h1></body>";

require 'phpmailer/PHPMailer.php';



        //email message
        $message =( '
          <!DOCTYPE html>
          <html>
          <head>
            <style>
              table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
              }
              td, th {
                text-align: left;
                padding: 8px;
              }
            </style>
          </head>
          <body>
            <h2>Hi, I am '.$us.' and I am Interested in your PG</h2>
            <table border=10 cellpadding=30 style="background-color: #ececec; font-size:25px; border-color:#ff9a9a;" >
<tr><th>USERNAME</th><td>'.$us.'</td></tr>
<tr><th>EMAIL ID</th><td>'.$em.'</td></tr>
<tr><th>PHONE NUMBER</th><td>'.$ph.'</td></tr>
<tr><th>LOCALITY</th><td>'.$loc.'</td></tr>
<tr><th>ACCOMMODATION TYPE</th><td>'.$acc.'</td></tr>
</table>
          </body>
          </html>        
        ');

        //mail utilities
        $credentials = array('MailId' => 'projectpoch2008@gmail.com' ,'Password' => 'xlwwaajarkdxcjab'); //mail credentials trigger mail to send
        $sendTo = array('MailId' => 'projectpoch2008@gmail.com','Name' => 'Pooja'); //Receiver mail id

        $mail = new PHPMailer;
        $mail->Mailer = "smtp";

        //Credentials
        $mail->Host = 'smtp.gmail.com';   //Sets Mailer to send message using SMTP
        $mail->Port = '465';        //Port
        $mail->SMTPAuth = TRUE;       //Auth in TRUE      
        $mail->SMTPSecure = 'ssl';          //Options are "", "ssl" or "tls"
        $mail->Username = $credentials['MailId'];   //Sets SMTP username
        $mail->Password = $credentials['Password']; //Sets SMTP password

        //Receiver mail id
        $mail->FromName = 'Pooja';//Set From name(Eg: enquiry,info,sales,support)
        $mail->AddAddress($sendTo['MailId'], $sendTo['Name']);

        //content of the sending mail
        $mail->IsHTML(true);    //Sets message type to HTML
        $mail->Subject = "New user has showed their response !";  //Sets the Subject of the message
        $mail->Body = $message;     //An HTML or plain text message body

        //Send an Email.
        $mail->Send();


?>


 