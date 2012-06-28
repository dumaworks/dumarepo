<?
$feedback = ""; 

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if ($name && $email && $message) {
        $to = $email;
        $subject = 'Message from: ' .$name;
        
        $headers = 'From: DUMA Team <dumaworks@gmail.com>' . "\r\n";
        $headers .= 'Cc: ' . "\r\n";
        $headers .= 'Bcc: qtoeric@gmail.com' . "\r\n";

        // Mail it

        $result = mail($to, $subject, $message, $headers);
        
        if($result)
        {
            header("location:contact.php");
        }
        else
        {
        $feedback = "2";
        }
    }
    else {
        $feedback = "1";
    }
}
else {
    $feedback = "1";
}

header("location:contact_us.php?B$@4it=$feedback");
?>