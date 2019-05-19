
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Data Trans</li>
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
							<th>Nama Pengirim</th>
							<th>Alamat Pengirim</th>
							<th>Tlp Pengirim</th>
							<th>Nama Penerima</th>
							<th>Alamat Penerima</th>
							<th>Tlp Penerima</th>
							<th>Berat</th>
							<th>Jenis</th>
							<th>Biaya</th>
							<th>ID transaksi</th>
						  </tr>
						</thead>
						<tbody>
							<?php $a=1;
				            foreach ($kirim->result() as $send) { ?>
						  <tr>
							<td><?=$a?></td>
							<td><?=$send->pengirim_nama?></td>
							<td><?=$send->pengirim_alamat?></td>
							<td><?=$send->pengirim_notlp?></td>
							<td><?=$send->penerima_nama?></td>
							<td><?=$send->penerima_alamat?></td>
							<td><?=$send->penerima_notlp?></td>
							<td><?=$send->berat_barang?></td>
							<td><?=$send->jenis_pengiriman?></td>
							<td><?=$send->biaya?></td>
							<td><?=$send->id_transaksi?></td>
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