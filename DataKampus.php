<html>
  <head>
  <?php
	include 'connection.php';
?>
 <meta charset="utf-8">
    <title>Institut Teknologi Kalimantan</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<style type="text/css">
  @import url(main.css);
  @import url(beranda.css);
   </style>
  </head>
  <body>
    <header>
  		<h1 class="judul">Institut Teknologi Kalimantan</h1>
  		<button class="tombol">MENU</button>
  		<nav class="menu">
  			<div class="logo-flat">
                  <img alt="personal-logo" class="img-responsive" src="#">
              </div>
  						<br>
  			<h4>MENU</h4>
  			<ul>
  				<li class="pelayanan-dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="title-icon fa fa-user"></i>PELAYANAN</a>
  						<ul class="dropdown-menu">
                <li class="active"><a href="Beranda.html">Beranda</a></li>
        				<li><a href="mahasiswa.php">Mahasiswa</a></li>

  						</ul>
  			</ul>
  		</nav>
  	</header>
	<center> <h3>DATABASE MAHASISWA ITK 2016</h3> </center>
		<table class="table_mahasiswa">
			<tr>
				<th>Nama</th>
				<th>NIM</th>
				<th>Prodi</th>
        <th>Asal Kota</th>
			</tr>
			<?php
				include 'connection.php';
				$query = mysqli_query ($conn, "SELECT * FROM mahasiswa");
				while($data = mysqli_fetch_array($query)){
			?>
			<tr>
				<td><?php echo $data['Nama']; ?></td>
				<td><?php echo $data['NIM']; ?></td>
				<td><?php echo $data['Prodi']; ?></td>
        <td><?php echo $data['Asal_Kota']; ?></td>
			</tr>
				<?php } ?>
</table>
</body>
</html>
