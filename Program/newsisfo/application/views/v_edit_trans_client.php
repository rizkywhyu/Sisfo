
	<ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>User <i class="fa fa-angle-right"></i>Input</li>
  </ol>
		<!--grid-->
 	<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>Edit Data Transaksi Client</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
        <tr><td>Nama Pengirim <?php echo form_error('pengirim_nama') ?></td>
            <td><input type="text" class="form-control" name="pengirim_nama" id="pengirim_nama" placeholder="pengirim_nama" value="<?php echo $pengirim_nama; ?>" / >
        </td>
      <tr><td>Alamat Pengirim  <?php echo form_error('pengirim_alamat') ?></td>
            <td><input type="text" class="form-control" name="pengirim_alamat" id="pengirim_alamat" placeholder="pengirim_alamat" value="<?php echo $pengirim_alamat; ?>" />
        </td>
      <tr><td>Tlp Pengirim <?php echo form_error('pengirim_notlp') ?></td>
            <td><input type="text" class="form-control" name="pengirim_notlp" id="pengirim_notlp" placeholder="pengirim_notlp" value="<?php echo $pengirim_notlp; ?>" />
        </td>
     
      <tr><td>Nama Penerima <?php echo form_error('penerima_nama') ?></td>
            <td><input type="text" class="form-control" name="penerima_nama" id="penerima_nama" placeholder="penerima_nama" value="<?php echo $penerima_nama; ?>" />
        </td>

      <tr><td>Alamat Penerima <?php echo form_error('penerima_alamat') ?></td>
            <td><input type="text" class="form-control" name="penerima_alamat" id="penerima_alamat" placeholder="penerima_alamat" value="<?php echo $penerima_alamat; ?>" />
        </td>
        <tr><td>Tlp Penerima <?php echo form_error('penerima_notlp') ?></td>
            <td><input type="text" class="form-control" name="penerima_notlp" id="penerima_notlp" placeholder="penerima_notlp" value="<?php echo $penerima_notlp; ?>" />
        </td>
        <tr><td>Berat <?php echo form_error('berat_barang') ?></td>
            <td><input type="text" class="form-control" name="berat_barang" id="berat_barang" placeholder="berat_barang" value="<?php echo $berat_barang; ?>" />
        </td>
        <tr><td>Jenis <?php echo form_error('jenis_pengiriman') ?></td>
            <td><input type="text" class="form-control" name="jenis_pengiriman" id="jenis_pengiriman" placeholder="jenis_pengiriman" value="<?php echo $jenis_pengiriman; ?>" />
        </td>
        <tr><td>Biaya <?php echo form_error('biaya') ?></td>
            <td><input type="text" class="form-control" name="biaya" id="biaya" placeholder="biaya" value="<?php echo $biaya; ?>" />
        </td>
        <tr><td>ID Transaksi <?php echo form_error('id_transaksi') ?></td>
            <td><input type="text" class="form-control" name="id_transaksi" id="id_transaksi" placeholder="id_transaksi" value="<?php echo $id_transaksi; ?>" />
        </td>

      <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
      <a href="<?php echo site_url('transaksi/viewtransbiasa') ?>" class="btn btn-default">Cancel</a></td></tr>
  
    </table></form>
   
    </div>
              </div>
            </div>
          </div>
        </section>
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
<script src="<?php echo base_url('asset/js/jquery.nicescroll.js');?>"></script>
<script src="<?php echo base_url('asset/js/scripts.js');?>"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url('asset/js/bootstrap.min.js');?>"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>