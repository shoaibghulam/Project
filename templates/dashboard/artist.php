<?php  if($this->input->get('id')){  
    
foreach($artist as $artist){
    if($artist->ArtistId==$this->input->get('id')){
    $id=$artist->ArtistId;
    $name=$artist->ArtistName;
    $des=$artist->ArtistDesc;
    $thum =$artist->ArtistThumbnail;
    }
}

?>
   
<!--Update code start    -->
<section class="container">
<!-- Inserting -->
  <form action="<?php echo base_url('Dashboard_artist/update')."?id=".$id; ?>" method="post" enctype="multipart/form-data" class="artist_form">
<!-- Input  Title-->
      <input type="text" name="ArtistName" placeholder="Enter Artist Name" class="form-control" value="<?php echo $name; ?>" required/>
      <span><?php  echo form_error('ArtistName'); ?></span>
      <!-- /Input  Title-->
      
            
      <!--Input  Information-->      
      <textarea class="form-control" name="ArtistDesc">
          <?php echo $des; ?>
      </textarea>
      <?php echo form_error('ArtistDesc'); ?>
      <!--Input  Information-->
      <input type="hidden" name="image" value="<?php echo $thum; ?>">
      <input type="file" name="ArtistThumb" class="btn btn-primary paint-image" value="Chose Image">
      
      <br><br>
     
      <input type="submit" value="Update" name="insert" class="btn btn-primary">
      <img class="pull-right"src="<?php echo base_url()."assets/images/artist/".$thum; ?>" widht="200px" height="200px"/>
  </form>
</section>
<!--/Update code start    -->

<?php } else{ ?>    
<section class="container">
<!-- Inserting -->
  <form action="<?php echo base_url('Dashboard_artist/Artistinsert'); ?>" method="post" enctype="multipart/form-data" class="artist_form">
<!-- Input  Title-->
      <input type="text" name="ArtistName" placeholder="Enter Artist Name" class="form-control" required/>
      <span><?php  echo form_error('ArtistName'); ?></span>
      <!-- /Input  Title-->
      
            
      <!--Input  Information-->      
      <textarea class="form-control" name="ArtistDesc"></textarea>
      <?php echo form_error('ArtistDesc'); ?>
      <!--Input  Information-->
      <input type="file" name="ArtistThumb" class="btn btn-primary paint-image" value="Chose Image">
      
      <br><br>
     
      <input type="submit" value="Insert Artist" name="insert" class="btn btn-primary">
      
  </form>
</section>
<?php } ?>
