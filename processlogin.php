<?php session_start();
$errorcount = 0;


$email = $_POST['email'] !="" ? $_POST['email'] : $errorcount++;
$password= $_POST['password'] !="" ? $_POST['password'] : $errorcount++;


$_SESSION['email']=$email;

if($errorcount > 0){
    $SESSION_error ="you  have " .$errorcount. "error"; 
   
    if ($errorcount > 1){
   $SESSION_error="s";
}
 $SESSION_error .="in your form submission";

$_SESSION["error"] = $SESSION_error ;
   
    header("location:LOGIN.php");
    }else {
        $alluser = scandir("db/user/");
        $countalluser = count($alluser);

        for ($counter = 0; $counter < $countalluser; $counter++) {

            $currentuser=$alluser[$counter];
            if($currentuser == $email . ".json"){
             
    }