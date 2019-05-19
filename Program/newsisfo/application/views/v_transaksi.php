
	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Forms <i class="fa fa-angle-right"></i> Input</li>
            </ol>
		<!--grid-->
 	<div class="grid-form">
 		<div class="grid-form1">
 		<h2 class="">Transaksi Pengiriman</h2>
<?php echo form_open('transaksi/insert'); ?>
<div class="row">
  <div class="form-group col-md-6">
    <label >Nama Pengirim</label>
    <?php echo form_input(array('type'=>"text", 'class'=>"form-control", 'placeholder'=>"Nama Pengirim", 'id'=>"nama_pengirim" ,'name'=>"nama_pengirim")); ?>
    </div>
  <div class="form-group col-md-6">
    <span>&nbsp &nbsp</span>
    <label >No Telp Pengirim</label>
    <?php echo form_input(array('type'=>"text", 'class'=>"form-control", 'placeholder'=>"No Telp Pengirim", 'id'=>"notlp_pengirim" ,'name'=>"notlp_pengirim")); ?>
  </div>
</div>
  <div class="form-group">
    <label >Alamat Pengirim</label>
    <?php echo form_input(array('type'=>"text", 'class'=>"form-control", 'placeholder'=>"Alamat Pengirim", 'id'=>"alamat_pengirim" ,'name'=>"alamat_pengirim")); ?>
  </div>
  <div class="row">
    <div class="form-group col-md-6">
    <label >Nama Penerima</label>
    <?php echo form_input(array('type'=>"text", 'class'=>"form-control", 'placeholder'=>"Nama Penerima", 'id'=>"nama_penerima" ,'name'=>"nama_penerima")); ?>
    </div>
  <div class="form-group col-md-6">
    <span>&nbsp &nbsp</span>
    <label >No Telp Penerima</label>
    <?php echo form_input(array('type'=>"text", 'class'=>"form-control", 'placeholder'=>"No Telp Penerima", 'id'=>"notlp_penerima" ,'name'=>"notlp_penerima")); ?>
  </div>
  </div>
  <div class="form-group">
    <label >Alamat Penerima</label>
    <?php echo form_input(array('type'=>"text", 'class'=>"form-control", 'placeholder'=>"Alamat Penerima", 'id'=>"alamat_penerima" ,'name'=>"alamat_penerima")); ?>
  </div>
  <div class="row">
    <div class="form-group col-md-4">
      <label >Berat Barang</label>
      <?php echo form_input(array('type'=>"text", 'class'=>"form-control", 'placeholder'=>"Barat Barang", 'id'=>"berat" ,'name'=>"berat")); ?>
      </div>
      <div class="form-group col-md-4">
        <label >Jenis Pengiriman (cepat/biasa) </label>
        

            <td><select class="form-control" type="text" name="jenistrans" id="jenistrans" value="Pilih">
              <option value="Cepat">Cepat</option>
              <option value="Biasa">Biasa</option>
              
            </select></td>

      </div>

    <div class="form-group col-md-4">
      <label >Tanggal Pengiriman</label>
      <?php echo form_input(array('type'=>"Date", 'class'=>"form-control", 'placeholder'=>"Tanggal Pengiriman", 'id'=>"tglkirim" ,'name'=>"tglkirim")); ?>
    </div>
  </div>
  <div class="form-group">
    <label >Biaya</label>
    <?php echo form_input(array('type'=>"text", 'class'=>"form-control", 'placeholder'=>"Biaya", 'id'=>"biaya" ,'name'=>"biaya")); ?>
  </div>
  <div class="form-group">
    <label >id Transaksi</label>
    <?php echo form_input(array('type'=>"text", 'class'=>"form-control", 'placeholder'=>"ID TRANS", 'id'=>"idtrans" ,'name'=>"idtrans" , 'value'=>rand(1,99999))); ?>
  </div>
  <div class="form-group">
    <label >Tipe Pengirim (Client/Biasa)</label>
    <!-- <?php echo form_input(array('type'=>"text", 'class'=>"form-control", 'placeholder'=>"Tipe", 'id'=>"tipe" ,'name'=>"tipe")); ?> -->
    <td><select class="form-control" type="text" name="tipe" id="tipe" value="Pilih">
              <option value="Client">Client</option>
              <option value="Biasa">Biasa</option>
              
            </select></td>
  </div>
  <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit','class'=>"btn btn-default", 'data-toggle'=>"modal", 'data-target'=>"#myModal")); ?>
</div>
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Pooled . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->

  <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
		
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