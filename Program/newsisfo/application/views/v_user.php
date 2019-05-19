
	<ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>User <i class="fa fa-angle-right"></i>Input</li>
  </ol>
		<!--grid-->
 	<div class="grid-form">
 		<div class="grid-form1">
 		<h2 id="forms-example" class="">Registrasi <?= ucfirst($tipe) ?> ></h2>
<!-- <form id="form_regitrasi" action="<?= base_url('index.php/user/daftar') ?>"> -->
<?php 
if($tipe=='client'){
  echo form_open('user/daftarclient'); 
}
else{
  echo form_open('user/daftarpegawai');
}
?>
  <div class="form-group">
    <label for="namaid">Nama</label>
    <?php echo form_input(array('type'=>"text", 'class'=>"form-control", 'placeholder'=>"Nama", 'id'=>"namaid" ,'name'=>"namaid", 'required'=>"")); ?>
   <!--  <input type="text" class="form-control" id="namaid" placeholder="Nama"> -->
  </div>
  <div class="form-group">
    <label for="alamatid">Alamat</label>
    <?php echo form_input(array('type'=>"text", 'class'=>"form-control", 'placeholder'=>"Alamat", 'id'=>"alamatid" ,'name'=>"alamatid", 'required'=>"")); ?>
  </div>
  <div class=form-group>
    <label for="tlpid">No Telp</label>
    <?php echo form_input(array('type'=>"text", 'class'=>"form-control", 'placeholder'=>"No Telp", 'id'=>"tlpid" ,'name'=>"tlpid", 'required'=>"")); ?>
  </div>
   <div class="form-group">
    <label for="usernameid">Username</label>
    <?php echo form_input(array('type'=>"text", 'class'=>"form-control", 'placeholder'=>"Username", 'id'=>"usernameid" ,'name'=>"usernameid", 'required'=>"")); ?>
  </div>
  <div class="form-group">
    <label for="passid">Password</label>
    <?php echo form_input(array('type'=>"text", 'class'=>"form-control", 'placeholder'=>"Password", 'id'=>"passid" ,'name'=>"passid", 'required'=>"")); ?>
  </div>
  <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit','class'=>"btn btn-default")); ?>
  <!-- <button type="submit" class="btn btn-default">Submit</button> -->
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
<script src="<?php echo base_url('asset/js/jquery.nicescroll.js');?>"></script>
<script src="<?php echo base_url('asset/js/scripts.js');?>"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url('asset/js/bootstrap.min.js');?>"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>