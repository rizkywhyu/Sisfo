
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
                
                  <h3 class='box-title'>Edit User</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
        <tr><td>id <?php echo form_error('id') ?></td>
            <td><input type="text" class="form-control" name="id" id="id" placeholder="id" value="<?php echo $id; ?>" / >
        </td>
      <tr><td>Nama  <?php echo form_error('nama_client') ?></td>
            <td><input type="text" class="form-control" name="nama_client" id="nama_client" placeholder="nama_client" value="<?php echo $nama_client; ?>" />
        </td>
      <tr><td>Alamat <?php echo form_error('alamat_client') ?></td>
            <td><input type="text" class="form-control" name="alamat_client" id="alamat_client" placeholder="alamat_client" value="<?php echo $alamat_client; ?>" />
        </td>
     
      <tr><td>No Telp <?php echo form_error('tlp_client') ?></td>
            <td><input type="text" class="form-control" name="tlp_client" id="tlp_client" placeholder="tlp_client" value="<?php echo $tlp_client; ?>" />
        </td>

      <tr><td>Username <?php echo form_error('username_client') ?></td>
            <td><input type="text" class="form-control" name="username_client" id="username_client" placeholder="username_client" value="<?php echo $username_client; ?>" />
        </td>
        <tr><td>Password <?php echo form_error('password_client') ?></td>
            <td><input type="text" class="form-control" name="password_client" id="password_client" placeholder="password_client" value="<?php echo $password_client; ?>" />
        </td>

      <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
      <a href="<?php echo site_url('user/viewclient') ?>" class="btn btn-default">Cancel</a></td></tr>
  
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