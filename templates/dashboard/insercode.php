
<section class="container">
<!-- Inserting Games-->
  <form action="includes/game_process.php" method="post" enctype="multipart/form-data" class="artist_form">
<!-- Input Games Title-->
      <input type="text" name="game_title" placeholder="Enter Game title" class="form-control" required/>
      <!-- /Input Games Title-->
      <!-- Input Games Description-->
      <input type="text" name="game_descripation" placeholder="Enter Description" class="form-control" required/>
      <!-- /Input Games Description-->
<!-- Select Category From Categroy Table-->
      <select name="game_category" class="form-control"> 
      <option value="">Select Category</option> 
       
      
      <option value="1">Action Games</option>
       
      
      <option value="4">Adventure Games</option>
       
      
      <option value="3">Horror Games</option>
       
      
      <option value="5">Sports Games</option>
       
      
      <option value="6">strategy games</option>
       
      
      <option value="2">War Games</option>
            </select>
<!-- End Category-->
            
      <!--Input Games Information-->      
      <textarea class="form-control" name="game_content"></textarea>
      <!--Input Games Information-->
     <input type="text" name="game_link" placeholder="Enter Game Link" class="form-control" required/>
      <input type="file" name="game_image" class="btn btn-primary paint-image" value="Chose Image">
      
      <br><br>
     
      <input type="submit" value="Insert Game" name="insert_game" class="btn btn-primary">
      
  </form>
</section>
