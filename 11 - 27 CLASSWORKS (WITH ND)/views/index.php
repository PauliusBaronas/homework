<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">

	<title>Employees</title>
</head>
<body>
	<div class="container mt-5">
		<form class="form-inline mb-3" method="GET">
			<div class="form-group mr-2">
				<select class="form-control" name="salary">
					<option<?php echo !isset($_GET['salary']) ? ' selected="selected"' : ''; ?> disabled="disabled">
						Please select salary
					</option>
					<option<?php showSelected('salary', 100) ?>>100</option>

					<option<?php showSelected('salary', 500) ?>>500</option>

					<option<?php showSelected('salary', 1000) ?>>1000</option>
				</select>
			</div>

			<div class="form-group mr-2">
				<select class="form-control" name="position">
					<option<?php echo !isset($_GET['position']) ? ' selected="selected"' : ''; ?> disabled="disabled">
						Please select position
					</option>
					<?php foreach($positions as $position): ?>
						<option value="<?php show($position->id); ?>"<?php showSelected('position', $position->id) ?>>
						<?php show($position->name); ?>
					</option>
					<?php endforeach;?>
				</select>
			</div>
			
			
			<button type="submit" class="btn btn-primary mr-2">Filter</button>
			<a href="./index.php" class="btn btn-danger mr-2">Clear</a>
			<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal" >Add new</button>
		</form>
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">New employee</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="index.php?page=add" method="POST">
							<div class="form-group">
								<label for="exampleInputEmail1">Name</label>
								<input type="text" class="form-control" name= "name">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Surname</label>
								<input type="text" class="form-control" name = "surname">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Position</label>
									<select class="form-control" name="position">
										<option disabled="disabled" selected="selected">Please select position</option>
										<?php foreach($positions as $position): ?>
										<option value="<?php show($position->id); ?>"<?php show($position->name) ?>>
											<?php show($position->name); ?>
										</option>
										<?php endforeach;?>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Salary</label>
								<input type="number" class="form-control" name="salary">
							</div>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" name = "submit" class="btn btn-primary">Save changes</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- modal end -->
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Surname</th>
					<th>Position</th>
					<th>Salary</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($employees as $employee): ?>
				<tr>
					<td><?php show($employee->id); ?></td>
					<td><?php show($employee->name); ?></td>
					<td><?php show($employee->surname); ?></td>
					<td><?php show($employee->position); ?></td>
					<td><?php show($employee->salary); ?></td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>




	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
</body>
</html>