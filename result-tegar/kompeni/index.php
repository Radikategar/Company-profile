<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Astra Honda Motor Indonesia</title>
	<link rel="stylesheet" href="slide.js">
	<link rel="shortcut icon" href="./img/honda.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- loader -->
	

    <!-- header -->
      

	<div class="container-header">
		<img src="./img/logo.png" alt="">
		<div class="list">
			<h2 class="h2" onclick="location.href='index.php'">HOME</h2>
			<h2 class="h2" onclick="location.href='product.html'">PRODUCT</h2>
			<h2 class="h2" onclick="location.href='service.html'">ABOUT</h2>
			<h2 class="h2" onclick="location.href='contact.php'">CONTACT</h2>
		</div>
	</div>


	<!-- banner -->
	<img src="./img/ptahm.jpg" alt="" srcset="" class="potobangunan">
<br><br>
	<div class="judul2">
		<h2>Situs Resmi AHM Indonesia</h2>
		<br>
		<p>Situs Resmi Astra honda motor Indonesia. AHM Indonesia adalah usaha yang bergerak dibidang industri otomotif yang memproduksi serta</p>
			<p> memasarkan motor, mobil dan motor tempel (outboard-motor).Dengan dukungan pelayanan purna jual suku cadang serta</p>
			 <p> perbaikan/pemeliharaan di seluruh Indonesia</p>
	</div>

<div class="vidio1">
	<video width="500" height="500" controls autoplay loop>
		<source src="img/vidio1.mp4" type="video/mp4">
	  </video>
</div>
	<div class="judul3">
		<h1>One HEART mencerminkan hubungan yang mendalam antara <br>
			 pengendara dan sepeda motornya.</h1>
				<br>
			 <p>Melalui OneHEART, Honda ingin membangun hubungan yang erat dengan setiap <br>
				 pengendara sepeda motor Honda. Karena Honda mengerti bahwa, sepeda motor bukan <br> 
				  sekedar alat transportasi melainkan sarana untuk mencapai mimpi dan juga merefleksikan <br>
				   gaya, kepribadian dan karakter mereka. <br>
					<br>
				Oleh karena itu di setiap hal dan setiap waktu, Honda selalu ada di samping mereka serta <br>
				 menjadi partner hidup yang terus mendukung untuk mencapai cita-cita dan mimpi mereka.</p>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<section class="karir1">
<div class="karir">
	<h1></h1>
	<br>
	<p><h2>Pengelola Sumber Daya Manusia PT Astra Honda Motor</h2></p>
<br>
		 <p>PT Astra Honda Motor adalah perusahaan manufakturing & distribusi sepeda <br>
			 motor terbesar di Indonesia, dengan jumlah karyawan lebih dari 20.000 orang. <br>
			  Sesuai dengan visi perusahaan, PT. Astra Honda Motor selalu berupaya untuk <br>
			   menyediakan solusi mobilitas terbaik yang mampu memenuhi kebutuhan <br>
			   	 konsumen dengan sistem manajemen kelas dunia.
<br>
			Untuk itu kami membutuhkan sumber daya manusia terbaik yang kreatif, inovatif, <br>
			 kompetitif dan siap bergabung dalam pencapaian tujuan tersebut. Dalam <br> 
			  pengelolaan SDM, PT. Astra Honda Motor memiliki sistem manajemenbr <br>
			   pengelolaan SDM yang profesional dengan prinsip Internally Fair dan Externally <br>
			    Competitive disertai dengan pengembangan SDM melalui program-program <br>
				 pelatihan dan pengembangan lainnya serta jenjang karir yang jelas seiring <br>
				  dengan berkembangnya bisnis sepeda motor yang semakin meningkat. <br>
			<br>
			Setiap orang di PT Astra Honda Motor dihargai sesuai dengan prestasi dan <br>
			 potensinya, jika Anda adalah orang yang memenuhi kualifikasi yang diinginkan, <br>
			  kami tunggu kehadiran Anda untuk bergabung bersama PT. Astra Honda Motor. <br>
			<br>
			Menghadapi tantangan pasar sepeda motor di Indonesia yang semakin ketat, <br>
			 PT. Astra Honda Motor membutuhkan sumber daya manusia yang kreatif, <br>
			  kompetitif, dan inovatif. Untuk itu PT. Astra Honda Motor membuka kesempatan <br>
			   berkarir di perusahaan manufaktur tingkat dunia dengan sistem karir yang <br>
			    Internally Fair dan Externally Competitive.</p>

</div>
<img src="img/orgmotor.webp" alt="">
</section>

<br>
<br>


<br>
<br>
<br>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2020 - Tegar Radika. All Rights Reserved.</small>
		</div>
	</footer>


	<script type="text/javascript">
		const h2  = document.getElementsByClassName('h2');
		$(document).ready(function(){
			$(".bg-loader").hide();
		})

     document.addEventListener('DOMContentLoaded', () => {
      for (const x of h2) {
		const text = [...x.textContent].map(a => `<span>${a}</span>`).join('');
		x.innerHTML = text;
	  }
	 })


	</script>
	
</body>
</html>