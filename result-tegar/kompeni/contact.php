<?php 
$conn = mysqli_connect("localhost", "root", "", "komen");

$query = mysqli_query($conn,"SELECT * FROM komen");


$row = [];
	while ( $rows = mysqli_fetch_assoc($query) ) {
		$row[] = $rows;
	}


	if ( isset($_POST['submit']) ) {
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$komentar = $_POST['komentar'];
		date_default_timezone_set("Asia/Jakarta");
		$dates = date('H:i:s d-m-y');
		$query = mysqli_query($conn, "INSERT INTO komen (nama, email, komentar, date) VALUES ('$nama', '$email', '$komentar', '$dates')");
		if ( mysqli_affected_rows($conn) ) {

			header("location: http://localhost/result-tegar/kompeni/contact.php");
			exit;
		}
	}



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Astra Honda Motor Indonesia</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');

* {
	padding:0;
	margin:0;

}
.container2-header {
	display: flex;
    height: 100px;
    width: 100%;
    justify-content: space-around;
    align-items: center;
    position: fixed;
    z-index: 1000;
    top: 0;
}

.container2-header .list {
	width: 600px;
	height: 100px;
	display: flex;
	justify-content: space-around;
	align-items: center;
}


.container2-header .list h2 {
	padding: 10px;
    background-color: red;
    color: white;
    border-radius: 10px;
    transition: transform 1s ease;
    cursor: pointer;
    font-family: emoji;
    font-size: 25px;
    font-weight: 600;
}

.container2-header .list h2:hover {
	transform: translateY(-10px);
}

.container2-header .list h2 span {
	display: inline-block;
	transition: transform 1s ease;
}

.container2-header .list h2 span:hover {
	transform: translateY(-10px);
}


section h3 {
	text-align: center;
	padding:20px 0;
	color: #ff0000;
	margin-bottom: 25px;
}
section h2 {
	text-align: center;
    color: #ff0000;
}
section h5{
	text-align: left;
	color: #000000;
}
section h4{
	text-align: center;
	color: #ff0000;

}


.about,
.service {
	padding-bottom: 100px;
}
.about p {
	color: #666;
	word-spacing: 2px;
	line-height: 25px;
	margin-bottom: 20px;
	text-align: center;
}
.service {
	background-color: #f9f9f9;
}
.box {
	color: #ff0000;
}
.box:after {
	content: '';
	display: block;
	clear: both;
}
.box .col-4 {
	width:25%;
	padding:20px;
	box-sizing: border-box;
	text-align: center;
	float: left;
}
.icon {
	width:70px;
	height:70px;
	border:1px solid;
	border-radius: 50%;
	text-align: center;
	line-height: 70px;
	font-size: 20px;
	margin:0 auto;
}
.box .col-4 h4 {
	margin:20px 0;
}
footer {
	padding:30px 0;
	background-color: #333;
	color: #fff;
	text-align: center;
}
.bg-loader {
	background-color: #eee;
	position: fixed;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 9999;
	display: flex;
	justify-content: center;
	align-items: center;
}
.bg-loader .loader {
	width:100px;
	height: 100px;
	border:3px solid #fff;
	border-radius: 50%;
	border-top-color: #148F77;
	border-right-color: #148F77;
	border-bottom-color: #148F77;
	animation: puterin .8s linear infinite;
}
.label {
	background-color: #148F77;
    color: #fff;
    right: 0;
    position: relative;
    left: 0;
    margin-top: 100px;
}
@keyframes puterin {
	100% {
		transform: rotate(360deg);
	}
}
@media screen and (max-width: 768px){
	.container2 {
		width:90%;
	}
	header h1 {
		text-align: center;
		float: none;
	}
	header ul {
		text-align: center;
		float: none;
	}
	.box .col-4 {
		width:100%;
		float: none;
		margin-bottom: 20px;
	}
}
.container2 img {
    width: 200px;
    position: absolute;
    left: 20px;
}   


.container212356 {
    text-align: center;
}


.container2123 {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap ;
}


footer .container2 {
	display: flex;
	justify-content: center;
	align-items: center;
}


.box-comentar {
	font-family: 'Open sans', sans-serif;
	width: 100%;
    height: 100vh;
	display: flex;
	flex-direction: column;
	align-items: center;

	
	
}


.box-comentar  {
	
	width: 40%;
	height: 400px;
	/* From https://css.glass */
background: rgba(237, 1, 1, 0.873);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.451);
backdrop-filter: blur(5px);
-webkit-backdrop-filter: blur(5px);
display: flex;
flex-direction: column;
align-items: center;

 
}


#komentar {
	width: 50%;
	height: 8vh;
}

form button  {
	width:  20%;
	height: 4vh;
	color: #ff0000;
	
}



	</style>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- loader -->
	

	<div class="container2-header" style="">
		<img src="./img/logo.png" alt="">
		<div class="list">
			<h2 onclick="location.href='index.php'">HOME</h2>
			<h2 onclick="location.href='product.html'">PRODUCT</h2>
			<h2 onclick="location.href='service.html'">ABOUT</h2>
			<h2 onclick="location.href='contact.php'">CONTACT</h2>
		</div>

	</div>

	<section class="label">
		<div class="container2" style="font-family: emoji"> 
			<p>Home / Contact</p>
		</div>
	</section>

	


	<!-- service -->
	<section class="service">
		<div class="container2">
			<h3>CONTACT INFO</h3>
			<div class="box">
				<div class="col-4">
					<h4>Address</h4>
					<p>Jl. Petojo VIJ VI, Cideng, Gambir, Jakarta Pusat 10150</p>
				</div>
				<div class="col-4">
					<h4>Email</h4>
					<p>radikategar1234@gmail.com@gmail.com</p>
				</div>
				<div class="col-4">
					<h4>Telp.</h4>
					<p>(021) 12345678</p>
				</div>
				<div class="col-4">
					<h4>Hp</h4>
					<p>082217604816</p>
				</div>
			</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6900571309807!2d106.80475321430978!3d-6.172237062202331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f67cae96f361%3A0x403c9461afd06e19!2sJl.%20Petojo%20Vij%20VI%2C%20RW.6%2C%20Cideng%2C%20Kecamatan%20Gambir%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2010150!5e0!3m2!1sid!2sid!4v1588930605432!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
	</section>


<form action="" method="post">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="container2">
	<h1 align="center">KOMENTAR</h1>
	<div class="mb-3">
	<label for="exampleFormControlInput1" class="form-label">Nama</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" placeholder="Nama">
</div>
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Email</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Komentar</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="komentar" rows="3"></textarea>
</div>
<button class="btn btn-primary w-100 mb-5 pb-4" name="submit"  id="button-komentar">Simpan Komentar</button>
</div>
</form>
<?php  foreach($row as $rw) { ?>
	<div class="card mx-5 my-5">
	<div class="card-header">
		<h4><?php  echo $rw['nama']; ?>    </h4>
		<small><?php  echo $rw['email']; ?></small>
		<br>
		<small><?php echo $rw['date']; ?></small>
	</div>	
  <div class="card-body komentar">
    <?php echo $rw['komentar']; ?>
  </div>
</div>	
<?php } ?>

	<!-- footer -->
	<footer>
		<div class="container2">
			<small>Copyright &copy; 2020 - 	M. TEGAR RADIKA All Rights Reserved.</small>
		</div>
	</footer>










	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		});
		document.addEventListener('DOMContentLoaded', () => {
      for (const x of h2) {
		const text = [...x.textContent].map(a => `<span>${a}</span>`).join('');
		x.innerHTML = text;
	  }
	 })




	  const kataKasar = [,"babi","anjing", "sialan", "bangsat"]
    //   const innerKomentar = document.querySelectorAll(".komentar");
    //   innerKomentar.forEach(async a => {
	// 	const result = await senSor(a.innerHTML);
	// 	a.innerHTML = result;
	//   })
		// function senSor(s) {
        //    let result;
		//    kataKasar.forEach(e => {
		// 	if (s.indexOf(e) !== -1) {
		// 		result = "*".repeat(s.length);

		// 	} else {
		// 		result;
		// 	}
		//    })

		//     if (result == undefined) {
		// 		return s;
		// 	} else {
		// 		return result;
		// 	}
		// }


		const komentar  = document.querySelectorAll('.komentar');

		  komentar.forEach(e => {
			const result= senSor(e.innerHTML);
			e.innerHTML = result;
		  })

		  		function senSor(s) {
           let result;
		   kataKasar.forEach(e => {
			if (s.indexOf(e) !== -1) {
				result = "*".repeat(s.length);

			} else {
				result;
			}
		   })

		    if (result == undefined) {
				return s;
			} else {
				return result;
			}
		}



	</script>
</body>
</html>