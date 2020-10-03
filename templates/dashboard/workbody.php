
<!--admin body-->

         <div class="col-md-8">
   
    
        <div class="row">
            
        <div class="col-lg-3 col-md-3">
        <br>
       <a href="insert_games.php" class="btn btn-primary">Insert Game</a>
   </div>
   <div class="col-md-3">
    
        </div>
    </div>
    
      
   <table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Thumb</th>
        <th>Title</th>
        <th>Artist</th>
        <th>Category</th>
        <th>User</th>
        <th>Delete</th>
        <th>Update</th>
        <th>View Profile</th>
      </tr>
    </thead>
    <tbody>
           <tr>
        <td>1</td>
        <td><img src="<?php echo base_url(); ?>assets/images/" style="width:50px; height:50px;"/></td>
        <td>hello world </td>
        <td>hello world </td>
        <td>hello world </td>
        <td> hello world</td>
        <td><a href="includes/game_delete.php?game_del=14">Delete</a></td>
        <td><a href="update_games.php?game=14">Update</a></td>
        <td><a href="../view.php?game_id=14et">View</a></td>
      </tr>
         
          
    </tbody>
  </table>
 

  
 

  <a href="<?php echo base_url('Dashboard_category'); ?>" class="btn btn-default">All Category</a>
  
<!--End Category Start-->
</div><!--/admin body-->

</div>
    </div>
</section>