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
</style>
            <?php $cid = $_GET['cid']; ?>
            <?php $id = $_GET['id']; ?>
			<!-- DIRECTORY -->
			<div class="main-dir back-color-white">
				<h1>Class <?php $el->getClassName($cid); ?></h1>
				<p>Teacher <?php $el->getClassFaculty($cid); ?></p>
			</div>
			<div class="inside-class">
				<ul>
				  <li><a href="class.php?cid=<?php echo $cid; ?>">Announcements</a></li>
				  <li><a href="assignments.php?cid=<?php echo $cid; ?>">Assignments</a></li>
				  <li><a href="quiz.php?cid=<?php echo $cid; ?>">Quiz</a></li>
				  <li><a class="sactive" href="grade.php?cid=<?php echo $cid; ?>">Grades</a></li>
				  <li><a href="students.php?id=<?php echo $cid; ?>">Students</a></li>
				</ul>
			</div>
			<!-- END DIRECTORY -->
			
			<!-- CONTAINER -->
			<div class="main-container">
				<div class="inner-container">
					<div class="content-row">
						<div class="panel back-color-white">
							<div class="panel-header-norm">
								<h2>Quiz Name: <?php $el->getQuizName($id); ?></h2>
							</div>
							<div class="panel-content-norm">
								<table class="action-table" id="classTable">
									<tr>
										<th>Student</th>
                                        <th>Score</th>
									</tr>
									<?php $el->viewQuizesGradeStudents($id); ?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END CONTAINER -->
<?php include '../assets/includes/footer.php'; ?>