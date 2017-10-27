<div class="col-xs-1"></div>
       <div class="col-xs-5 Todos">
       
        <form method="POST" action="edit.php">
        <div class="col-xs-12">
        <p class="add-p"><label for="Whattodo">What to do:</label></p>
        <input type="text" name="Whattodo" value="<?php echo $Todos["Title"];?>">
        <p class="add-p"><label for="CreatedBy">CreatedBy:</label></p>
        <input type="text" name="CreatedBy" value="<?php echo $Todos["CreatedBy"];?>">
        </div>
        <input type="hidden" name="Edit" value="<?php echo $Todos["id"];?>">
        <div class="col-xs-4">
        <button type="submit" class="btn btn-default">Save changes</button>
        </div>
        </form>
        
        <div class="col-xs-4">
        <form method="POST" action="completed.php">
          <input type="hidden" name="Completed" value="<?php echo $Todos["id"];?>">
          <button type="submit" class="btn btn-default">Mark as done</button>
        </form>
        </div>
        
        <div class="col-xs-4">
        <form method="POST" action="delete.php">
          <input type="hidden" name="Delete" value="<?php echo $Todos["id"];?>">
          <button type="submit" class="btn btn-default">Delete</button>
        </form>
        </div>
        
        </div>