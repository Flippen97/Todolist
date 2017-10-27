    <div class="col-xs-1"></div>
        <div class="col-xs-5 Todos">
       
        <div class="col-xs-12">
        <p class="add-p">What to do:</p>
        <p class="checked"><?php echo $Todos["Title"];?></p>
        <p class="add-p">CreatedBy:</p>
        <p class="checked"><?php echo $Todos["CreatedBy"];?></p>
        </div>
        <div class="col-xs-6">
        <form method="POST" action="delete.php">
          <input type="hidden" name="Delete" value="<?php echo $Todos["id"];?>">
          <button type="submit" class="btn btn-default">Delete</button>
        </form>
        </div>
       </div>
   