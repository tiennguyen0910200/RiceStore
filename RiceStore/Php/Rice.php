<!DOCTYPE html>
<html>
<head>
	<title>Rice</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php include 'connect.php'; ?>
	
	<form action="" method="POST" role="form">
		<legend>Rice Store</legend>

		<div class="form-group">
			<label for="">Tên món</label>
			<input type="text" name="ten" class="form-control" id="" placeholder="ten">
		</div>
		<div class="form-group">
			<label for="">Ảnh</label>
			<input type="text" name="anh" class="form-control" id="" placeholder="anh">
		</div>
		<div class="form-group">
			<label for="">Giá</label>
			<input type="text" name="gia" class="form-control" id="" placeholder="gia">
		</div>


		

		<button type="submit" class="btn btn-primary" name="add" id="add" >Add</button>
		<button type="submit" class="btn btn-primary" name="edit" id="edit" >Edit</button>
	</form>

	<table border="1px" class="table table-hover">		
		<tr>
			<th>Id</th>
			<th>Tên</th>
			<th>Ảnh</th>
			<th>Giá</th>
			<th></th>
		</tr>
		<form method="post">
		<?php for ($i=0; $i <count($result) ; $i++) {?>
			<tr>
				<td> <?php echo $result[$i][0]; ?>	</td>
				<td> <?php echo $result[$i][1]; ?>	</td>
				<td style="width: 300px"><img style="width: 200px; height: 200px" src=" <?php echo  $result[$i][2]; ?>"> 	</td>
				<td> <?php echo $result[$i][3];  ?>	</td>
				<td><button name="sua" value=<?php echo $result[$i][0] ?>>Sửa</button>
					
						<button name="xoa" value=<?php echo $result[$i][0] ?>>Xóa</button>
				
				</td>
				</tr>
			<?php	} ?>
				</form>
		</table>
	</body>
	</html>