    
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Example of Auto Loading Bootstrap Modal on Page Load</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
</head>
<body>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Sma Ibrahimy 1</h4>
            </div>
            <div class="modal-body">
            <center><img src="assets/img/home.png">
                <br>
                <br>
				<h3>Terima Kasih Sudah Mendaftar</h3></center>
                <p class="text-center">Silahkan Klik Lanjut Untuk Melakukan Tes Online</p>
                <br>
                    <a href="quiz.php"><button type="submit" style="float:right;" class="btn btn-success" >Lanjut</button></a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>                     