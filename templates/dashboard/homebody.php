<?php
foreach($about as $profile){}
?>
<!--admin body-->

         <div class="col-md-5">
   <form action="<?php echo base_url('Dashboard/updateprofile'); ?>" method="post" enctype="multipart/form-data">
       <label>Name:</label>
       <input type="text" name="name" value="<?php echo $profile->name; ?>" placeholder="Enter Name" class="form-control" required>
       <label>Profession:</label>
       <input type="text" name="profession" value="<?php echo $profile->profession; ?>" placeholder="Enter profession" class="form-control" required>
       <label>Facebook:</label>
       <input type="text" name="Facebook" value="<?php echo $profile->fb; ?>" placeholder="Enter Facebook" class="form-control" required>
       <label>Twitter:</label>
       <input type="text" name="Twitter" value="<?php echo $profile->twitter; ?>" placeholder="Enter Twitter" class="form-control" required>
       <label>Instgram:</label>
       <input type="text" name="Instgram" value="<?php echo $profile->instgram; ?>" placeholder="Enter Instgram" class="form-control" required>
       <label>Linkedlist:</label>
       <input type="text" name="linkedlist" value="<?php echo $profile->linkedlist; ?>" placeholder="Enter Name" class="form-control" required>
      
       <label>DOB:</label>
       <input type="text" name="DOB" value="<?php echo $profile->dob; ?>" placeholder="example 12 Dec 1996" class="form-control" required>
       <label>Email:</label>
       <input type="Email" name="Email" value="<?php echo $profile->email; ?>" placeholder="Enter Email" class="form-control" required>
       <label>Contact No:</label>
       <input type="text" name="contact" value="<?php echo $profile->contact; ?>" placeholder="Enter Email" class="form-control" required>
       <label>Address:</label>
       <input type="text" name="address" value="<?php echo $profile->location; ?>" placeholder="Enter Address" class="form-control" required>
       
       <label>About Me</label>
       <textarea class="form-control" name="desc" style="height:300px; resize:none;">
           <?php echo $profile->description; ?>
       </textarea>
       <label>Google Map Embed Code</label>
       <textarea class="form-control" name="map" style="height:300px; resize:none;">
           <?php echo $profile->map; ?>
       </textarea>
       <br>
       <label>Profile Picture</label>
       <input type="file" name="thumb" class="form-control"> <br>
       <input type="submit" name="submit" value="update" class="btn btn-primary center-block">
      </form>
    
       
        <h1>CV Information</h1>
        <?php foreach($cv as $cvinfo){} ?>
      <form action="<?php echo base_url('Dashboard/cv'); ?>" method="post" enctype="multipart/form-data">
          <input type="text" name="hirelink" value="<?php echo $cvinfo->hirelink; ?>" placeholder="Hire Link" class="form-control" required>
          <input type="file" name="cv" class="form-control"> <br>
          <input type="submit" name="submit" value="CV Update" class="btn btn-primary center-block">
          <span><?php echo $cvinfo->cvfile; ?></span>
      </form>
        
    </div>
<div class="col-md-3">
    <img src="<?php echo base_url();?>assets/images/banner/<?php echo $profile->profile; ?>" style="width:100%;">
</div>    
 
   
  
<!--End Category Start-->
</div><!--/admin body-->

</div>
    </div>
</section>
