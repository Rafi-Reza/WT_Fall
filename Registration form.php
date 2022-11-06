<?php
$Name="";
$email="";
$mobileno="";
$validatemobileno="";
$validatepassword="";
$validateradio="";
$validatecheckbox="";
$validateemail="";
$Password="";


if($_SERVER["REQUEST_METHOD"]=="POST")
{
$Name=$_REQUEST["name"]; 
$email=$_REQUEST["email"]; 
$Password=$_REQUEST["password"];

if(!empty($Name) && strlen($Name)>=5) 
{
    $Name="You are ".$Name;
}

else if(empty($Name))
{
    $Name="Name is empty !!";
}
else if( strlen($Name)==5)
{
    $Name=" Name Must contain 5 characters"
}
else if(empty($Name) &&  strlen($Name)<5)
{
    $Name="Again entry your name";
}



if(empty($email) 
{
    $validateemail="Please Enter Your Email";
}
else{
    $validateemail= "Your Email is ".$email;
}


if(strlen($Password)<8)
{
    $validatepassword=" Must Contain 8 characters";
}
else{
    $validatepassword=$Password;
}


if(isset($_REQUEST["gender"]))
{
    $validateradio= "Gender - ".$_REQUEST["gender"];
}
else{
    $validateradio= "Please Select Your Gender";
}

  if (strlen ($mobileno) != 11)
  {  
     $validatemobileno= "Number must contain 11 digits.";  
  }  
  else{
    $validatemobileno=$mobileno;
} 

    $existingdata = file_get_contents('data.json');
    $existingdatainphp = json_decode($existingdata);

$myarray=array(
    "Name"=> $_REQUEST["name"],
    "Gender"=> $_REQUEST["gender"],
    "email"=> $_REQUEST["email"],
    "Password"=> $_REQUEST["password"],
    'mobileno'=> "$validatemobileno",

);
   
 ?>