<?php
if(isset($_POST['submit'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "ajeetsingh1646@gmail.com";
    $email_subject = "New Registrations, ";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
         $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
        $first_name = $_POST['username'];
        $last_name = $_POST['username2'];
        $job_title = $_POST['job_title'];
        $company = $_POST['company'];
       $email = $_POST['email'];
       $phone = $_POST['number'];
       $location = $_POST['location'];
        $industry = $_POST['industry'];
 
    // validation expected data exists
    if(!isset($_POST['username']) ||
        !isset($_POST['username2']) ||
        !isset($_POST['job_title']) ||
        !isset($_POST['company']) ||
       !isset($_POST['email']) ||
       !isset($_POST['number']) ||
       !isset($_POST['location']) ||
        !isset($_POST['industry'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
 
    $email_message = "Form details below.\n\n";
 
     
    
     
 
    $email_message .= "First Name: ".$first_name."\n";
    $email_message .= "Last Name: ".$last_name."\n";
    $email_message .= "Job Name: ".$job_title."\n";
    $email_message .= "Company Name: ".$company."\n";
    $email_message .= "Email Address: ".$email."\n";
    $email_message .= "Contact: ".$phone."\n";
    $email_message .= "Location: ".$location."\n";
    $email_message .= "Industry: ".$industry."\n";
 
// create email headers
$headers = 'From: '.$email."\r\n";

mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
}
header("Location: index.php");
?>