<?php 
if(($_POST['gender']) == 'male'){
    echo "Thanks Mr ".$_POST['first_name']." ".$_POST['last_name'];
} else {
    echo "Thanks Miss ".$_POST['first_name']." ".$_POST['last_name'];
}
echo "<br>";
echo "please review your information";
echo "<br>";
echo "Name: ".$_POST['first_name']." ".$_POST['last_name'];
echo "<br>";
echo "Address: ".$_POST['address'];
echo "<br>";
echo "Your Skills is: ";
if(isset($_POST['skill1'])){echo $_POST['skill1']."<br>";}
if(isset($_POST['skill2'])){echo $_POST['skill2']."<br>";}
if(isset($_POST['skill3'])){echo $_POST['skill3']."<br>";}
if(isset($_POST['skill4'])){echo $_POST['skill4']."<br>";}
echo "<br>";
echo "Department: ".$_POST['department'];








?>