<?
$email = "cablauvelt@gmail.com";
$to = $email;
$subject = 'Subject of My Email';
$message="Message of My Email";

$headers .= 'From: DUMA Team <dumaworks@gmail.com>' . "\r\n";
$headers .= 'Cc: ' . "\r\n";
$headers .= 'Bcc: qtoeric@gmail.com' . "\r\n";

// Mail it

$result = mail($to, $subject, $message, $headers);

if($result)
{
echo "Winning! Email sent!";
}
else
{
echo "Fail! Email Not sent :( ";
}
?>