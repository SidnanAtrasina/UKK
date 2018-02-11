<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<table>
			<tr>
				<th>No</th>
				<th>U_name</th>
				<th>Pass</th>
				<th>Action</th>
			</tr>
	<?php 
	 $no = 1;
	 foreach($user as $u){ ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->pekerjaan ?></td>
			<td>
			 	<?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
                <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
			</tr>
		</table>
</body>
</html>