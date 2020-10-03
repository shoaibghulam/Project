
<!--admin body-->

         <div class="col-md-8">
   
    
        <div class="row">
            
        <div class="col-lg-12 col-md-12">
        <br>
     
  <?php       if($this->input->get('id') && $this->input->get('sk')){ ?>
  <form action="<?php echo base_url('Skills/update'); ?>" method="post"  class="form-inline">
   <div class="form-group">
   <input type="hidden" name="id" value="<?php echo $this->input->get('id'); ?>">
    <label>Skill Name:</label>
    <input type="text" name="skill" value="<?php echo $this->input->get('sk'); ?>" class="form-control"  placeholder="Example PHP" required>
  </div>
  <div class="form-group">
    <label >Knowledge 0-100</label>
    <input type="text" name="position"value="<?php echo $this->input->get('sp'); ?>" class="form-control"  placeholder="Example 89" required>
  </div>
             <button type="submit" class="btn btn-primary">update</button>

            </form>

  <?php } else { ?>
  <form action="<?php echo base_url('Skills/insert'); ?>" method="post"  class="form-inline">
  <div class="form-group">
   
    <label>Skill Name:</label>
    <input type="text" name="skill" class="form-control"  placeholder="Example PHP" required>
  </div>
  <div class="form-group">
    <label >Knowledge 0-100</label>
    <input type="text" name="position" class="form-control"  placeholder="Example 89" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  
  <?php } ?>
   </div>
   <div class="col-md-3">
    
        </div>
    </div>
    
    
  
   <table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Skill</th>
        <th>Knowledge</th>
        <th>Delete</th>
        <th>Update</th>
        
      </tr>
    </thead>
    <tbody>
          <?php
        $x=1;
        foreach($skill as $skill):
        
               ?>
           <tr>
       
        <td><?php echo $x++; ?></td>
        <td><?php echo $skill->stitle; ?></td>
        <td><?php echo $skill->sposition; ?></td>

        <td><a href="<?php echo base_url('SKills/skilldelete')."?id=". $skill->sid; ?>">Delete</a></td>
        <td><a href="<?php echo base_url('Skills')."?id={$skill->sid}&sk={$skill->stitle}&sp={$skill->sposition}"; ?>">Update</a></td>

   
         </tr>
           <?php endforeach; ?>
          
    </tbody>
  </table>
 

  
 

  <a href="<?php echo base_url('Dashboard_category'); ?>" class="btn btn-default">All Category</a>
  
<!--End Category Start-->
</div><!--/admin body-->

</div>
    </div>
</section>