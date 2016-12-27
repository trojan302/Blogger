<?php 

mysql_connect('localhost','root','')or die("Unable to connect server");
mysql_select_db('blog');

if (isset($_POST['edit'])) {
	
	$title 		= $_POST['title'];
	$category 	= $_POST['category'];
	$author 	= $_POST['author'];
	$body 		= $_POST['body'];
	$date 		= $_POST['date'];
	$id			= $_POST['id'];

	mysql_query("UPDATE post SET title='$title', category='$category', date='$date', body='$body', 	author='$author' WHERE id='$id'	");

	header('Location: ../edit.php?get_notif=true');

}