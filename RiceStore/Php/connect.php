<?php
$db = new mysqli("localhost","root","","riceStore");

$sql = "SELECT * from rice";
$result = $db->query($sql)->fetch_all();


if (isset($_POST['add'])) {
	$db->query("INSERT INTO rice (name,image,price) values('".$_POST['ten']."','".$_POST['anh']."','".$_POST['gia']."')");
	header('refresh:0');
}
if (isset($_POST['xoa'])) {
	$db->query("delete from rice WHERE id= '".$_POST['xoa']."'");
	header('refresh:0');
	
}
if (isset($_POST['sua'])) { ?>


	<?php
	$sql2 = "SELECT * from rice WHERE id = '".$_POST['sua']."'";
	$result2 = $db->query($sql2)->fetch_all();
	$_POST['ten']= $result2[0][1];
	$_POST['anh']= $result2[0][2]; 
	$_POST['gia']= $result2[0][3]; 
	$db->query("UPDATE rice SET name='".$_POST['ten']."',image='".$_POST['anh']."',price='".$_POST['gia']."' WHERE id='".$_POST['sua']."'");

}

?>




