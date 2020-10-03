<script>
$(document).ready(function(){
    tinymce.remove('#mymap'); 
});
</script>
<!--admin body-->
<?php foreach($setting as $setting){} ?>
         <div class="col-md-8">
        <div class="row">
       <div class="col-md-12">
          

           <h1>Site Setting</h1>
             <form action="<?php echo base_url('Setting/update'); ?>" method="post" enctype="multipart/form-data">
                 <label>Site Title</label>
                 <input type="text" name="title" value="<?php echo $setting->stitle; ?>" placeholder="Enter Title" value="<?php echo $setting->stitle; ?>" class="form-control" >
                 <label>Site Logo</label>
                 <input type="file" name="logo"  class="form-control" >
                 <label>Site Favicon</label>
                 <input type="file" name="favicon"  class="form-control" >
                 <label>Description</label>
       <textarea class="form-control" name="desc" style="height:300px; resize:none;">
           <?php echo $setting->description; ?>
       </textarea><br><br>
            <input type="submit" name="update" value="Save" class="btn btn-primary center-block">
             </form>
              </div>

<div class="col-md-4">
   <h1 align="center">Website Logo</h1>
    <img src="<?php echo base_url()."assets/images/". $setting->slogo; ?>" alt="" width="100%">
</div>
<div class="col-md-4">
   <h1 align="center">Website Favicon</h1>
    <img src="<?php echo base_url()."assets/images/". $setting->sfavicon; ?>" class="center-block" width="100%">
</div>
<div class="col-md-12">
    <h1>Account Setting</h1>
    <?php foreach($users as $user){} ?>
    <form action="<?php echo base_url('Setting/account');?>" method="post">
     <label>Username  <?php echo form_error('username'); ?></label> 
     <input type="text" name="username" value="<?php echo $user->username; ?>" class="form-control" placeholder="Enter User Name" required>
     <label>Email <?php echo form_error('email'); ?></label>
     <input type="Email" name="email" value="<?php echo $user->email; ?>"class="form-control" placeholder="Enter Email Address" required>
     <label>Password </label> <span><?php echo form_error('password'); ?></span>
     <input type="text" name="password" class="form-control" placeholder="Enter Password" required> <br>
     <input type="submit" name="submit" value="Update" class="btn btn-primary center-block">
    </form>
   
</div>
</div>
    </div>

</section>
