
<!--admin body-->

         <div class="col-md-8">
   
    
        <div class="row">
            
        <div class="col-lg-12 col-md-12">
        <br>
     
   </div>
   
    </div>
    
    
  <div class="col-md-7">
   <table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Skill</th>
        <th>Delete</th>
        <th>Update</th>
        
      </tr>
    </thead>
    <tbody>

          <?php
        $x=1;
    foreach($services as $serve):
        
               ?>
           <tr>
       
        <td><?php echo $x++; ?></td>
        <td><?php echo $serve->sertitle; ?></td>
        

        <td><a href="<?php echo base_url('Services/servicedelete')."?id=". $serve->serid; ?>">Delete</a></td>
        <td><a href="<?php echo base_url('Services')."?id={$serve->serid}&sk={$serve->sertitle}&sp={$serve->serdesc}&sericon={$serve->sericon}"; ?>">Update</a></td>

   
         </tr>
           <?php endforeach; ?>
          
    </tbody>
  </table>
 

 </div> 
  
  <div class="col-md-5">
      <h1>Services Form</h1>
     <?php
      if($this->input->get('id') || $this->input->get('sk') || $this->input->get('sp')){
      ?>
      <form action="<?php echo base_url('Services/update')."?sid={$this->input->get('id')}"; ?>" method="post" enctype="multipart/form-data">
          <label>Title</label>
          <input type="text" name="title" value="<?php echo $this->input->get("sk")?>" placeholder="Enter Service Title" class="form-control" required>
          <label>Description</label>
          <input type="text" name="desc" value="<?php echo $this->input->get("sp")?>" placeholder="Enter Service Description" class="form-control" required>
         <label>Icon Code</label> <a href="https://lineicons.com/icons" target="_blank"> Icon Cheat Sheet</a>
          <input type="text" name="icon" value="<?php echo $this->input->get("sericon")?>" placeholder="Enter Service icon css code" class="form-control" required> <br>
          <input type="submit" name="submit" value="Update" class="btn btn-primary center-block">
        
         
      </form>
      <?php } else{ ?>
       <form action="<?php echo base_url('Services/insert'); ?>" method="post" enctype="multipart/form-data">
          <label>Title</label>
          <input type="text" name="title" placeholder="Enter Service Title" class="form-control" required>
          <label>Description</label>
          <input type="text" name="desc" placeholder="Enter Service Description" class="form-control" required>
         <label>Icon Code</label> <a href="https://lineicons.com/icons" target="_blank"> Icon Cheat Sheet</a>
          <input type="text" name="icon" placeholder="Enter Service icon css code" class="form-control" required> <br>
          <input type="submit" name="submit" value="Insert" class="btn btn-primary center-block">
        
         
      </form>
      <?php } ?>
  </div>
<!--End Category Start-->
</div><!--/admin body-->

</div>
    </div>
</section>