<?php

if (isset($_POST['signup'])) {


    // EDIT THE 2 LINES BELOW AS REQUIRED

    $email_to = "wiamhasna@gmail.com";

    $email_subject = "Your email subject line";
    function died($error)
    {
        // your error code can go here

        echo "We are very sorry, but there were error(s) found with the form you submitted. ";

        echo "These errors appear below.<br /><br />";

        echo $error . "<br /><br />";

        echo "Please go back and fix these errors.<br /><br />";

        die();
    }



    // validation expected data exists

    if (

        !isset( $_POST['name']) ||

        !isset($_POST['email']) ||

        !isset($_POST['password']) ||

        !isset($_POST['confirm_password']) || 

        !isset($_POST['address']) ||

        !isset($_POST['city']) ||

        !isset($_POST['zip']) 

    ) {

        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }



    $name = $_POST['name']; 

    $email_from = $_POST['email']; 

   $password =  $_POST['password'];

   $confirm_password = $_POST['confirm_password'];
 
    $address =  $_POST['address'];

    $city =  $_POST['city'];

    $zip =  $_POST['zip'];
    
    //*************************************//
  function validateMember()
{
    $valid = true;
    $errorMessage = array();
    foreach ($_POST as $key => $value) {
        if (empty($_POST[$key])) {
            $valid = false;
        }
    }
    
    if($valid == true) {
        if ($_POST['password'] != $_POST['confirm_password']) {
            $errorMessage[] = 'Passwords should be same.';
            $valid = false;
        }
        
        if (! isset($error_message)) {
            if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $errorMessage[] = "Invalid email address.";
                $valid = false;
            }
        }
        
        if (! isset($error_message)) {
            if (! isset($_POST["terms"])) {
                $errorMessage[] = "Accept terms and conditions.";
                $valid = false;
            }
        }
    }
    else {
        $errorMessage[] = "All fields are required.";
    }
    
    if ($valid == false) {
        return $errorMessage;
    }
    return;
}
//**************************************************//
/* namespace Phppot;

use \Phppot\Member;
if (! empty($_POST["signup"])) {
    
    $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["userEmail"], FILTER_SANITIZE_STRING);
    require_once ("signup.php");
    // Form Required Field Validation 
    $member = new Member();
    $errorMessage = $member->validateMember($username, $displayName, $password, $email);
    
    if (empty($errorMessage)) {
        $memberCount = $member->isMemberExists($username, $email);
        
        if ($memberCount == 0) {
            $insertId = $member->insertMemberRecord($username, $displayName, $password, $email);
            if (! empty($insertId)) {
                header("Location: thankyou.php");
            }
        } else {
            $errorMessage[] = "User already exists.";
        }
    }
} */
//**********************************************//
 /*function isMemberExists($username, $email)
{
    $query = "select * FROM registered_users WHERE user_name = ? OR email = ?";
    $paramType = "ss";
    $paramArray = array($username, $email);
    $memberCount = $this->ds->numRows($query, $paramType, $paramArray);
    
    return $memberCount;
} */
//****************************************//
 /*function insertMemberRecord($username, $password, $email)
{
    $passwordHash = md5($password);
    $query = "INSERT INTO registered_users (user_name, display_name, password, email) VALUES (?, ?, ?, ?)";
    $paramType = "ssss";
    $paramArray = array(
        $username,
        $displayName,
        $passwordHash,
        $email
    );
    $insertId = $this->ds->insert($query, $paramType, $paramArray);
    return $insertId;
} */
    //**********************************//

    $error_message = "";

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email_from)) {

        $error_message .= $email_from .'The Email Address you entered does not appear to be valid.<br />';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {

        $error_message .= 'The Name you entered does not appear to be valid.<br />';
    }
   
    

    if (strlen($error_message) > 0) {

        died($error_message);
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string)
    {

        $bad = array("content-type", "bcc:", "to:", "cc:", "href");

        return str_replace($bad, "", $string);
    }



    $email_message .= "First Name: " . clean_string($name) . "\n";

    $email_message .= "Email: " . clean_string($email_from) . "\n";

    $email_message .= "Telephone: " . clean_string($telephone) . "\n";

    $email_message .= "Comments: " . clean_string($comments) . "\n";





    // create email headers
        $headers = 'From: ' . $email_from . "\r\n" .

        'Reply-To: ' . $email_from . "\r\n" .

        'X-Mailer: PHP/' . phpversion();

    @mail($email_to, $email_subject, $email_message, $headers);
    echo '
    Thank you for contacting us. We will be in touch with you very soon.
    ';

     header("Location: login.php");
}

?>