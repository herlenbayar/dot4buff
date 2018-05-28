<h1>Users</h1>


<?php	print_r($this->users); ?>
	<table class="table table-striped">
		<tr>
			<th>id</th>
			<th>username</th>
			<th>userpass</th>
		</tr>
		<?php 	foreach($this->users as $key => $value): ?>
		<tr>
			<td><?php echo $value['id']; ?></td>
			<td><?php echo $value['username']; ?></td>
			<td><?php echo $value['password']; ?></td>
			<td><a href="<?php echo 'edit/'.$value['id'] ?>">Edit</a></td>
		</tr>
		<?php endforeach; ?>
	</table>

