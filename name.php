<!DOCTYPE html>
<html>

    <head>


    </head>    


<body>
    
    
  <form method="post">
    
    <label for="naam">Wat is je naam?</label>
    <input type="text" name="naam" required><br>
    <label for="naam">Wat is je achternaam?</label>
    <input type="text" name="achternaam" required><br>
    <input type="submit" value="verzend" name="groet">
    
    
  </form>
        
    
  <?php
        if(isset($_POST['naam']) && isset($_POST['achternaam']))
        {
            echo "Hallo, " . $_POST['naam'] . " " . $_POST['achternaam'] ;
        }

 ?>  
    
    
    
    
</body>









</html>