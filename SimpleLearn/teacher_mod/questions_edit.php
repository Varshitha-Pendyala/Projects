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
<?php $id = $_GET['id']; ?>
<!-- DIRECTORY -->
<div class="main-dir">
    <h1>Quiz</h1>
</div>
<!-- END DIRECTORY -->

<!-- CONTAINER -->
<div class="main-container">
    <div class="inner-container">
        <div class="content-row">
            <div class="panel back-color-white">
                <div class="panel-header-norm">
                    <h2>Edit Question</h2>
                </div>
                <div class="panel-content-norm">
                    <span class="error" id="error"></span>
                    <form class="enter-announce" method="post" id="editQuestion">
                        <div>
                            <label class="data-name">Question:</label>
                            <input type="text" value="<?php echo $question; ?>" id="question" required>
                        </div>
                        <div>
                            <label class="data-name">Choice A:</label>
                            <input type="text" value="<?php echo $ca; ?>" id="ca" required>
                        </div>
                        <div>
                            <label class="data-name">Choice B:</label>
                            <input type="text" value="<?php echo $cb; ?>" id="cb" required>
                        </div>
                        <div>
                            <label class="data-name">Choice C:</label>
                            <input type="text" value="<?php echo $cc; ?>" id="cc" required>
                        </div>
                        <div>
                            <label class="data-name">Choice D:</label>
                            <input type="text" value="<?php echo $cd; ?>" id="cd" required>
                        </div>
                        <div>
                            <label class="data-name">Answer:</label>
                            <select id="answer" required>
                                <option>Select Answer</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                        </div>
                        <input type="text" value="<?php echo $id; ?>" id="quizid" hidden required>
                        <div class="col-btn">
                            <button class="button back-color-green">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTAINER -->
<script src="../assets/javascript/elearning.scripts.js?<?php echo time(); ?>"></script>
<script type="text/javascript">document.getElementById('editQuestion').addEventListener('submit', editQuestion);</script>
<?php include '../assets/includes/footer.php'; ?>