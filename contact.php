
<?php
$conn=mysqli_connect("localhost","id17647226_pkarthik", "888pjkm@Dm@D","id17647226_pkspace");
if(!$conn){
	echo"Connection not established";
} 
else{
$myfile = fopen("contacts.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("contacts.txt"));
fclose($myfile);
}
?>

