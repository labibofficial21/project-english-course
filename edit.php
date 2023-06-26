<?php
// include database connection file
include_once("koneksidb.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$nama=$_POST['name'];
	$kategori=$_POST['kategori'];
	$post=$_POST['post'];
		
	// update user data
	$result = mysqli_query($db, "UPDATE forum SET name='$nama',kategori='$kategori',post='$post' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: forum_admin.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($db, "SELECT * FROM forum WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$nama = $user_data['name'];
	$kategori = $user_data['kategori'];
	$post = $user_data['post'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="forum.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>Kategori</td>
				<td><input type="text" name="kategori" value=<?php echo $kategori;?>></td>
			</tr>
			<tr> 
				<td>Post</td>
				<td><input type="text" name="post" value=<?php echo $post;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>