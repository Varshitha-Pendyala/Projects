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
}
.nav-dropdown{
	margin-left: 89vw ;
}
.nav-links{
	background-color: white;
	width:300px;
}
.sidebar-nav a:hover{
	background-color: #df403d;
}
.sidebar-nav a{
	border-bottom: 1px solid #df403d;
		color:black;
}
.sidebar-nav .active-link{
	border-left: 5px solid #df403d;
}
.panel-header-norm{
	width : calc(100%-300px);
}
.sidebar-nav{
	 display:flex;
}
.nav-bar{
	width: 20vw;
}
.content-row{
	flex-grow: 1;
}
.main-container{
	display: block;
    max-width: 500px;
    height: auto;
    margin: 0 auto;
	border: 1px solid black;
	background-color: white;
}
</style>
<?php
	if(isset($_POST['submit'])){
		$title = htmlspecialchars($_POST["title"]);
		$description = htmlspecialchars($_POST["desc"]);
		$class = htmlspecialchars($_POST["class"]);
		$uploaded = $user;
		$filename = $_FILES['file']['name'];
		$path = "../uploads/".$filename;
		move_uploaded_file($_FILES["file"]['tmp_name'], $path);
		$action = "uploaded an assignment " . $filename;
		$el->setUpload($title, $description, $uploaded, $class, $filename, $path, $date);
		$el->setActivityLog($user, $action, $date);
		header('Location: index.php');
	}
?>
			
			<!-- DIRECTORY -->
			<div class="main-dir">
				<h1>Assignment</h1>
			</div><br><br>
			<!-- END DIRECTORY -->
			
			<!-- CONTAINER -->
			<div class="main-container">
				<div class="inner-container">
					<div class="content-row">
						<div class="panel back-color-white">
							<div class="panel-header-norm">
								<h2>Upload Assignment</h2>
							</div>
							<div class="panel-content-norm">
								<span class="error" id="error"></span>
								<form class="enter-data" method="post" action="" enctype="multipart/form-data" />
									<div>
										<label class="data-name">Title:</label>
										<input type="text" name="title">
									</div>
									<div>
										<label class="data-name">Description:</label>
										<input type="text" name="desc">
									</div>
									<div>
										<label class="data-name">Class:</label>
										<select id="classes" name="class" required>
											<option value="">--Select Class--</option>
											<?php $el->getClassSelect($user); ?>
										</select>
									</div>
									<div>
										<label class="data-name">Upload File:</label>
										<input type="file" name="file">
									</div>
									<div class="col-btn">
										<button type="submit" name="submit" class="button back-color-green">Upload Assignment</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END CONTAINER -->
		<script src="../assets/javascript/elearning.scripts.js?<?php echo time(); ?>"></script>
<?php include '../assets/includes/footer.php'; ?>