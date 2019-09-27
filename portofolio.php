<?php 
include "koneksi.php";
include "layout/head.php";
include "layout/menu.php";
	session_start();
	if (isset( $_SESSION['nik'])) {
	$level = $_SESSION['level'];
	$username = $_SESSION['nik'];
	$tahun = date('Y');

?>

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		

	<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Portofolio</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Isi Data Portofolio</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="POST" action="prosesportopolio.php?nik=<?php echo $_SESSION['nik'];?>">
							
								<div class="form-group">
									<label>NIK</label>
									<input class="form-control" value="<?php echo $_SESSION['nik'];?> "name="nik" >
								</div>
								<div class="form-group">
									<label>Bidang Keahlian</label>
									<input class="form-control" name="bidang_keahlian" >
								</div>
									<div class="form-group">
									<label>Riwayat Pelatihan</label>
									<textarea name="riwayat_pelatihan" class="form-control" rows="3"></textarea>
								</div>
									<div class="form-group">
									<label>Sertifikat yang dimiliki</label>
									<textarea name="sertifikat_dimiliki" class="form-control" rows="3"></textarea>
								</div>
								 <!-- <div class="form-group">
									<label >Upload file</label>	
										<input type="file" name="file" id="fileToUpload">
									</div>  --> 

								<button type="submit"  class="btn btn-primary">Submit</button>
								<button type="reset" class="btn btn-default">Reset</button>
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->








	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>

<?php }else{
	echo"<script language='javascript'>alert('Terjadi kesalahan, silakan ulangi !')</script>";
		echo"<div align='center'><h1>Login Gagal</h1></div>";
		echo"<div align='center'><a href='pages-login.html'>Kembali</a></div>";
 	}
?>
