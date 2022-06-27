<h2 class="page-header">Dashboard</h2>
<h4>Emp List-</h4>
<h2>Employee Details</h2>
<table class="table">
	<thead class="thead-light">
		<tr>
			<th scope="col">FirstName</th>
			<th scope="col">MiddleName</th>
			<th scope="col">lastName</th>
			<th scope="col">DOB</th>
			<th scope="col">Age</th>
			<th scope="col">Email-id</th>
			<th scope="col">Mobile-no</th>
			<th scope="col">Gender</th>
			<th scope="col">Emp-code</th>

		</tr>
	</thead>
	<tbody>

		<?php foreach ($employee_record as $emp_data) { ?>

			<tr>
				<td><?php echo $emp_data['emp_firstname']; ?>

					<hr>
				</td>
				<td><?php echo $emp_data['emp_middlename']; ?></td>
				<td><?php echo $emp_data['emp_lastname']; ?></td>
				<td><?php echo $emp_data['emp_DOB']; ?></td>
				<td><?php echo $emp_data['emp_age']; ?></td>
				<td><?php echo $emp_data['emp_emailid']; ?></td>
				<td><?php echo $emp_data['emp_mobilenum']; ?></td>
				<td><?php echo $emp_data['emp_gender']; ?></td>
				<td><?php echo $emp_data['emp_code']; ?><a class="btn btn-warning pull-left" href="<?php echo base_url(); ?>admin/employee/edit/<?php echo $emp_data['emp_id']; ?> ">Edit</a></td>

			</tr>
		<?php  }
		?>