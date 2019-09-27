<?php 
include "koneksi.php";
include "layout/head.php";
include "layout/menu.php";?>

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Pendaftar</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Data Pendaftar</div>
					<div class="panel-body">
						<table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true"  data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="state" data-sortable="true">No</th>
						        <th data-field="id" data-sortable="true">NIK</th>
						        <th data-field="name"  data-sortable="true">Nama</th>
						        <th data-field="prices" data-sortable="true">Tanggal Lahir</th>
						        <th data-field="price" data-sortable="true">Alamat</th>
						        <th>Opsi</th>
						    </tr>
						    </thead>
						    <?php
						    $no=1;
		$query = mysqli_query($koneksi, "SELECT * FROM pengguna");
		while ($data = mysqli_fetch_array($query)) { ?>
			<tr>
				<td><?php echo $no++;?></td>
				<td><?php echo $data['nik'];?></td>
				<td><?php echo $data['nama'];?></td>
				<td><?php echo $data['ttl'];?></td>
				<td><?php echo $data['alamat'];?></td>
				<td><a href="editdaftar.php?nik=<?php echo $data['nik'];?>">Edit</a> | <a href="hapusdaftar.php?nik<?php echo $data['nik'];?>"> Hapus</a></td>
			</tr>
		<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
						<script>
						    $(function () {
						        $('#hover, #striped, #condensed').click(function () {
						            var classes = 'table';
						
						            if ($('#hover').prop('checked')) {
						                classes += ' table-hover';
						            }
						            if ($('#condensed').prop('checked')) {
						                classes += ' table-condensed';
						            }
						            $('#table-style').bootstrapTable('destroy')
						                .bootstrapTable({
						                    classes: classes,
						                    striped: $('#striped').prop('checked')
						                });
						        });
						    });
						
						    function rowStyle(row, index) {
						        var classes = ['active', 'success', 'info', 'warning', 'danger'];
						
						        if (index % 2 === 0 && index / 2 < classes.length) {
						            return {
						                classes: classes[index / 2]
						            };
						        }
						        return {};
						    }
						</script>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
		
	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
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
