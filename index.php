<?php
	include 'connection.php';
	?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<title> Тестовое задание Honey Hunters</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--Css-->
		<link rel="stylesheet" type="text/css" href="css/my.css">
		<!--Bootstrap-->
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css'>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
		<script src="js/sendform.js"></script>
	</head>
	<body>
		<div class="container formbl">
			<nav class="navbar navbar-expand-sm">
				<a class="navbar-brand" href="#"><img class="logo" alt="logo" src="/test/img/logo.png"></a>
			</nav>
			<div class="d-flex justify-content-center">
				<img class="contacticon" src="/test/img/contacticon.png">
			</div>
			<div class="row contacts">
				<div class="col-sm-6">
					<div class="form-group justify-content-center">
						<label for="name">
							Имя 
							<p class="zvez">*</p>
						</label>
						<input type="text" class="form-control" id="name">
					</div>
					<div class="form-group">
						<label for="email">
							E-Mail 
							<p class="zvez">*</p>
						</label>
						<input type="email" class="form-control" id="email">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="comment">
							Комментарий 
							<p class="zvez">*</p>
						</label>
						<textarea class="form-control" rows="5" id="comment"></textarea>
					</div>
					<button id="btn" type="button" class="btn btn-danger go">Записать</button>
					<p class="text-success" id="ModalSucc" style="display: none; margin: 0;">Отправлено</p>
					<p class="text-danger" id="ModalReq" style="display: none; margin: 0;">Вы что-то не ввели!</p>
					<p class="text-danger" id="ModalErr" style="display: none; margin: 0;">Произошла ошибка</p>
				</div>
			</div>
		</div>
		<div class="container-fluid komm">
			<h4> Выводим комментарии</h4>
			<div class="d-flex justify-content-center bck">
				
				<div id="gett" class="card-columns wh">
					<script type="text/javascript">
						function show()
						{
						    $.ajax({
						        url: 'function/get.php',
						        cache: false,
						        
						        dataType: "html",
						        success: function(html){
						            $('#gett').html(html);
						        }
						    });
						}
						$(document).ready(function(){
            show();
            setInterval('show()',1000);  
        });
					</script>
					
				</div>
			</div>
		</div>
		<footer class="foot">
			<div class="container d-flex justify-content-between mb-3">
				<div class="p-2"><img class="logofoot" alt="logo" src="/test/img/logo.png"></div>
				<div class="p-2 iconfoot">
					<a href="https://vk.com"><img class="iconfoot2" src="/test/img/vk.png" style="margin-right: 1.5rem;"></a>
					<a href="https://facebook.com"><img class="iconfoot2" src="/test/img/fb.png"></a>
				</div>
			</div>
		</footer>
	</body>
</html>