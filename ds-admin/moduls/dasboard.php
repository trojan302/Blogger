<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1>Simple Dashboard</h1>
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
		  		$post = new AdminPanel();

				$sql = $post->GetData();
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
					<a href="edit.php?action=edit&id=<?= $data['id'] ?>#editors" class="btn text-primary"><span class="glyphicon glyphicon-pencil small"></span> Edit</a> 
					<a href="edit.php?data=delete&id=<?= $data['id']; ?>" class="btn text-danger"><span class="glyphicon glyphicon-trash small"></span> Delete</a></td>
				</tr>

		  <?php

				}
		  ?>
		  </table>
        </div>
    </div>
</div>