<?php include '../assets/includes/header.php'; ?>

<style>
html, body{
	position: relative;
	height: 100%;
	background-color: white;
}
.sidebar-header{
	background-color: white;
	margin-left: 45vw;
	margin-top: 20px;
	display: none;
}
.nav-dropdown{
	margin-left: 89vw ;
}
</style>

<!-- DIRECTORY -->
<div class="main-dir">
	<h1>
		<?php echo ucwords($userName); ?>
	</h1>
</div>
<!-- END DIRECTORY -->

<!-- CONTAINER -->
<div class="main-container">
	<div class="inner-container">
		<div class="content-row">
			<div class="panel back-color-white">
				<div class="panel-header-norm">
					<h2>Profile</h2>
				</div>
				<div class="panel-content-norm">
					<span class="error" id="error"></span>
					<form class="close-input" method="post" id="editUser">
						<div>
							<label class="data-name">Student ID:</label>
							<input type="text" value="<?php echo $id; ?>" id="studentID" disabled required>
						</div>
						<div>
							<label class="data-name">First Name:</label>
							<input type="text" value="<?php echo $fname; ?>" id="firstName" disabled required>
						</div>
						<div>
							<label class="data-name">Last Name:</label>
							<input type="text" value="<?php echo $lname; ?>" id="lastName" disabled required>
						</div>
						<div>
							<label class="data-name">Mobile:</label>
							<input type="text" value="<?php echo $mobile; ?>" id="mobile" disabled required>
						</div>
						<div>
							<label class="data-name">Date of Birth:</label>
							<input type="text" value="<?php echo $dob; ?>" id="dob" disabled required>
						</div>
						<div>
							<label class="data-name">Course:</label>
							<input type="text" value="<?php echo $course; ?>" id="course" disabled required>
						</div>
						<div>
							<label class="data-name">Program:</label>
							<input type="text" value="<?php echo $program; ?>" id="program" disabled required>
						</div>
						<div class="col-btn">
							<a class="data-link"
								href="profile_edit.php?id=<?php echo $id; ?>&action=select-student">Change Password</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END CONTAINER -->
<?php include '../assets/includes/footer.php'; ?>