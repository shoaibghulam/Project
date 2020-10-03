<?php
if($this->input->get('id')){
$id=$this->input->get('id');
    foreach ($category as $cat){
    if($cat->CatId==$id){
        $name=$cat->CatName;
        $desc=$cat->CatDesc;
    }
}

?>

<section class="container">
<!-- Inserting -->
  <form action="<?php echo site_url('Dashboard_Category/update')."?id=".$id; ?>" method="post" enctype="multipart/form-data" class="artist_form">
<!-- Input  Title-->
      <input type="text" name="CatName" placeholder="Enter Game title" value="<?php echo $name; ?>" class="form-control" required/>
      <!-- /Input  Title-->
            
      <!--Input  Information-->      
      <textarea class="form-control" name="CatDesc">
          <?php echo $desc; ?>
      </textarea>
      <!--/Input GInformation-->
      <br><br>
     
      <input type="submit" value="Upate Category" name="submit" class="btn btn-primary">
      
  </form>
</section>
<?php
}
else{   
    
   ?> 
<section class="container">
<!-- Inserting -->
  <form action="<?php echo site_url('Dashboard_Category/insert'); ?>" method="post" enctype="multipart/form-data" class="artist_form">
<!-- Input  Title-->
      <input type="text" name="CatName" placeholder="Enter Game title" class="form-control" required/>
      <!-- /Input  Title-->
            
      <!--Input  Information-->      
      <textarea class="form-control" name="CatDesc">
         
      </textarea>
      <!--/Input GInformation-->
      <br><br>
     
      <input type="submit" value="Insert Category" name="submit" class="btn btn-primary">
      
  </form>
</section>
    
    <?php } ?>
