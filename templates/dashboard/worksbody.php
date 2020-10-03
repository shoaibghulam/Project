
<!--admin body-->

         <div class="col-md-8">
   
    
        <div class="row">
            <div class="col-md-8">
   <?php 
    $img=null;
    if($this->input->get('id')){ 
    $uid=$this->input->get('id');
    foreach($work as $w){
    if($w->wid==$uid){
    $wtitle=$w->wtitle;
    $wlink = $w->wlink;
    $wthumb= $w->wthumb;
    $wserid = $w->serid;
    $servicetitle=  $w->sertitle;
    $img=$wthumb;
    }
    
}
                
                ?>
          <h1>Work Form</h1>
          
      <form action="<?php echo base_url('Works/update'); ?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="wid" value="<?php echo $uid; ?>">
          <label>Title</label>
          <input type="text" name="title" value="<?php echo $wtitle; ?>" placeholder="Enter Project Title" class="form-control" required>
         
          <label>Link</label>
          <input type="text" name="link" value="<?php echo $wlink; ?>" placeholder="Enter Project Link" class="form-control" required>
          <label> Service Type</label>
          <select name="service" class="form-control">
            <option value="<?php echo $wserid; ?>"><?php echo $servicetitle; ?></option>
             <?php foreach($services as $serve):
              echo"<option value='{$serve->serid}'>{$serve->sertitle}</option>";
                  endforeach ;?>
          </select>
          <input type="file" name="thumb" class="form-control btn btn-primary"><br>
          <input type="submit" name="Update" value="Update" class="btn btn-primary center-block">
      </form>
  
       <?php } else { ?>
          <h1>Work Form</h1>
      <form action="<?php echo base_url('Works/insert'); ?>" method="post" enctype="multipart/form-data">
          <label>Title</label>
          <input type="text" name="title" placeholder="Enter Project Title" class="form-control" required>
          <label>Link</label>
          <input type="text" name="link" placeholder="Enter Project Link" class="form-control" required>
          <label> Service Type</label>
          <select name="service" class="form-control">
             <?php foreach($services as $serve):
              echo"<option value='{$serve->serid}'>{$serve->sertitle}</option>";
                  endforeach ;?>
          </select>
          <input type="file" name="thumb" class="form-control btn btn-primary"><br>
          <input type="submit" name="Insert" value="Insert" class="btn btn-primary center-block">
      </form>
  <?php } ?>
        </div>
         <div class="col-md-3">
           <?php
             $img;
             if($img==null){
                $img="w-6.jpg";
             }
             
             ?>
            <img src="<?php echo base_url().'/assets/images/work/'.$img;  ?>" width="100%" style="padding-top:90px;">
         </div>
        <div class="col-lg-12 col-md-12">
        <br>
     
   </div>
   
    </div>
    
    
  <div class="col-md-12">
   <table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Thumbnail</th>
        <th>Title</th>
        <th>Work Link</th>
        <th>Category</th>
        <th>Delete</th>
        <th>Update</th>
      

      </tr>
    </thead>
    <tbody>
          <?php
        $x=1;
        foreach($work as $work):
        
               ?>
           <tr>
       
        <td><?php echo $x++; ?></td>
        <td><img src="<?php echo base_url()."/assets/images/work/".$work->wthumb; ?>" width="70px" height="70px"></td>
        <td><?php echo $work->wtitle; ?></td>
        <td><?php echo $work->wlink; ?></td>
        <td><?php echo $work->sertitle; ?></td>

        <td><a href="<?php echo base_url('Works/workdelete')."?id=". $work->wid; ?>">Delete</a></td>
        <td><a href="<?php echo base_url('Works')."?id={$work->wid}&sk={$work->wid}&sp={$work->wid}"; ?>">Update</a></td>

   
         </tr>
           <?php endforeach; ?>
          
    </tbody>
  </table>
 

 </div> 
  <!--End Category Start-->
</div><!--/admin body-->

</div>
    </div>
</section>