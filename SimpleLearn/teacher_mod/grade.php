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
#upload_href{
	float:right;
}
#upload_href:hover{
	background-color:white;
}

</style>
			<?php $cid = $_GET['cid']; ?>
			<!-- DIRECTORY -->
			<div class="main-dir back-color-white">
				<h1>Class <?php $el->getClassName($cid); ?></h1>
			</div>
			<div class="sidebar-nav">
			<div class="nav-bar">
			<!-- Sidebar Navigation Links -->
			<ul class="nav-links">
				<li><a href="class.php?cid=<?php echo $cid; ?>" class="<?php echo ($urlName == 'class.php') ? 'active-link' : ''; ?>">Announcements</a></li>
				<li><a href="students.php?cid=<?php echo $cid; ?>" class="<?php echo ($urlName == 'students.php') ? 'active-link' : ''; ?>">Students</a></li>
				<li><a href="assignments.php?cid=<?php echo $cid; ?>" class="<?php echo ($urlName == 'assignments.php') ? 'active-link' : ''; ?>">Assignments</a></li>
				<li><a href="quiz.php?cid=<?php echo $cid; ?>" class="<?php echo ($urlName == 'quiz.php') ? 'active-link' : ''; ?>">Quizzes</a></li>
				<li><a href="grade.php?cid=<?php echo $cid; ?>" class="<?php echo ($urlName == 'grade.php') ? 'active-link' : ''; ?>">Grades</a></li>
			</ul>
			</div>
			<!-- END DIRECTORY -->
			
			<!-- CONTAINER -->
					<div class="content-row">
						<div class="panel back-color-white">
							<div class="panel-header-norm">
								<h2>Grades</h2>
							</div>
							<div class="panel-content-norm">
								<table class="action-table" id="classTable">
									<tr>
										<th>Quizes</th>
                                        <th> </th>
                                        <th>Action</th>
									</tr>
									<?php $el->viewQuizes($cid); ?>
								</table>
							</div>
						</div>
					</div>
			<!-- END CONTAINER -->
<?php include '../assets/includes/footer.php'; ?>