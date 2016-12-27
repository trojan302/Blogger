<?php require_once 'settings/settings.php'; ?>


<!DOCTYPE html>
<html>
<head>
<title>Edit Content</title>
  <script src="libs/tinymce/js/tinymce/tinymce.min.js"></script>
  <script>tinymce.init({
  selector: 'textarea',
  height: 400,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
  ],
  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });</script>
 <link rel="stylesheet" href="libs/css/bootstrap.min.css">
</head>
<body class="container">

	<header class="jumbotron" style="margin-top: 30px;">
		<h2>Editinng Post Content</h2>
		<?php if (isset($_GET['get_notif']) == 'true') { ?>
		<div class="alert bg-success">Update Successfully!!!</div>
		<?php echo "<meta http-equiv='refresh' content='2; url=edit.php' />"; } ?>
	</header>
  
  <table class="table table-striped table-responsive small">
  	<thead>
  		<tr class="bg-primary">
  			<th>No</th>
  			<th>Title</th>
  			<th>Categories</th>
  			<th>Author</th>
  			<th>Option</th>
  		</tr>
  	</thead>
  <?php 

		$sql = $blog->GetData();
		$no=1;
		while ($data = mysql_fetch_assoc($sql) ) {
			
			$kat = mysql_query("SELECT * FROM categories WHERE id='".$data['category']."'");
			$kategori = mysql_fetch_assoc($kat);
  ?>

		<tr>
			<td><?= $no++; ?></td>
			<td><?= $data['title']; ?></td>
			<td><?= $kategori['text']; ?></td>
			<td><?= $data['author']; ?></td>
			<td>
			<a href="?action=edit&id=<?= $data['id'] ?>#editors" class="btn text-primary"><span class="glyphicon glyphicon-pencil small"></span> Edit</a> 
			<a href="?data=delete&id=<?= $data['id']; ?>" class="btn text-danger"><span class="glyphicon glyphicon-trash small"></span> Delete</a></td>
		</tr>

  <?php

		}
  ?>
  </table>
  <?php

		if (isset($_GET['action']) == 'edit') {
			
			$id = $_GET['id'];

			$sql = mysql_query("SELECT * FROM post WHERE id='$id' ");
			while ($data = mysql_fetch_assoc($sql) ) {
				$kat = mysql_query("SELECT * FROM categories WHERE id='". $data['category'] ."' ");
				$kategori = mysql_fetch_assoc($kat);
	?>
	<a href="edit.php" class="btn btn-link"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
	<form action="core/edit_act.php" method="POST" class="form-inline" id="editors">
		<div class="input-group">
			<span class="input-group-addon">Title</span>
			<input type="text" name="title" value="<?= $data['title']; ?>" required class="form-control">
		</div>
		<div class="input-group">
			<span class="input-group-addon">Kategori</span>
			<select name="category" class="form-control">
				<option value="<?= $data['id']; ?>" selected disabled><?= $kategori['text']; ?></option>
				<?php 
				$kat = mysql_query("SELECT * FROM categories ");
				while ($kategori = mysql_fetch_assoc($kat)) { ?>
				<option value="<?= $kategori['id'] ?>"> <?= $kategori['text'] ?> </option>
				<?php } ?>
			</select>
		</div>
		<div class="input-group">
			<span class="input-group-addon">Tanggal Posting</span>
			<input type="text" name="date" value="<?= $data['date']; ?>" required class="form-control" style="width: 250px;">
		</div>
		<div class="input-group">
			<span class="input-group-addon">Author</span>
			<input type="text" name="author" value="<?= $data['author']; ?>" required class="form-control">
		</div>
		<div style="margin-bottom: 10px;"></div>
		<textarea name="body" required>
			<?= $data['body']; ?>
		</textarea><br>
		<div class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-save"></i></span>
			<input type="submit" name="edit" value="Save" class="form-control btn btn-primary">
		</div>
		<input type="hidden" value="<?= $data['id'] ?>" name="id">
	</form>
	<?php

			}

		}

		if (isset($_GET['data']) == 'delete') {
			
			$id = $_GET['id'];
			$sql = mysql_query("DELETE FROM post WHERE id='$id' ");
			if ($sql) {
				
				echo "<script>alert('Data Successfully deleted!')</script>";
				echo "<meta http-equiv='refresh' content='0; url=edit.php' />";

			}

		}

	?>

	<script src="libs/js/jquery.min.js"></script>
	<script src="libs/js/bootstrap.min.js"></script>

</body>
</html>