<?php 

include "koneksi.php";
include "layout/head.php";
?>

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		

	<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Registrasi</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Registrasi Keanggotaan</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="POST" action="prosesregister.php">
							
								<div class="form-group">
									<label>NIK</label>
									<input class="form-control" value="<?php echo $_SESSION['nik'];?>" name="nik" >
								</div>
								<div class="form-group">
									<label>Nama</label>
									<input class="form-control" name="nama" >
								</div>

								<div class="form-group">
									<label>Tempat Tanggal Lahir</label>
									<input class="form-control" name="ttl" >
								</div>
									<div class="form-group">
									<label>Alamat</label>
									<textarea name="alamat" class="form-control" rows="3"></textarea>
								</div>
								<div class="form-group">
									<label>Provinsi</label>
									<input class="form-control" name="provinsi" >
								</div>
									<div class="form-group">
									<label>Email</label>
									<input class="form-control" name="email" >
								</div>							
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="password" class="form-control">
								</div>
							
								<button type="submit" class="btn btn-primary">Submit</button>
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
