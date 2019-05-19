
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Data Pegawai</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h2>Data Transaksi</h2>
					    <table id="table">
						<thead>
						  <tr>
						  	<th>No</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Tlp</th>
							<th>Username</th>
							<th>Password</th>
							<th>Action</th>
						  </tr>
						</thead>
						<tbody>
							<?php $a=1;
				            foreach ($worker->result() as $work) { ?>
						  <tr>
							<td><?=$a?></td>
							<td><?=$work->nama_pegawai?></td>
							<td><?=$work->alamat_pegawai?></td>
							<td><?=$work->tlp_pegawai?></td>
							<td><?=$work->username_pegawai?></td>
							<td><?=$work->password_pegawai?></td>
						<td style="text-align:center" width="200px">
							<?php 
							echo '  '; 
							echo anchor(site_url('user/updatepegawai/'.$work->id),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm')); 
							echo '  '; 
							echo anchor(site_url('user/deletepegawai/'.$work->id),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure to Delete ?\')"'); 
				            
							?>

		    			</td>
						  </tr>
						  <?php $a++; } ?>
						  
						</tbody>
					  </table>
					</div>
			</div>
			<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Pooled . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>