<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="custom.css">
	<title>Start Online Test</title>


</head>
<body>

<div id="container">
	<h1>Start Online Test</h1>


<form method="post" action="<?php echo base_url();?>index.php/Questions/resultdisplay">



<?php foreach ($questions as $row) { ?>


<?php $ans_array = array($row->choice1, $row->choice2, $row->choice3, $row->answer);
shuffle($ans_array); ?>

<p><?=$row->quizID?>.<?=$row->question?></p>

<input type="radio" name="quizid<?=$row->quizID?>" value="<?=$ans_array[0]?>" required><?=$ans_array[0]?><br>
<input type="radio" name="quizid<?=$row->quizID?>" value="<?=$ans_array[1]?>"><?=$ans_array[1]?><br>
<input type="radio" name="quizid<?=$row->quizID?>" value="<?=$ans_array[2]?>"><?=$ans_array[2]?><br>
<input type="radio" name="quizid<?=$row->quizID?>" value="<?=$ans_array[3]?>"><?=$ans_array[3]?><br>
<?php } ?>

<br><input type="submit" value="submit">

</form>
</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="JS/jquery-3.4.1.js"></script>
		<script src="JS/bootstrap.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</main>
<nav aria-label="Page navigation example">
	<ul class="pagination justify-content-center">
		<li class="page-item disabled">
			<a class="page-link" href="#" tabindex="-1">Previous</a>
		</li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item">
			<a class="page-link" href="#">Next</a>
		</li>
	</ul>
</nav>
</body>
</html>
