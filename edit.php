<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Edit Book</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
   <div class="container">
      <header class="d-flex justify-content-between my-4">
         <h1>Edit Book</h1>
         <div>
            <a href="index.php" class="btn btn-primary">Back</a>
         </div>
      </header>
      <?php
         if(isset($_GET["id"])){
            $id = $_GET["id"];
            include("connect.php");
            $sql = "SELECT * FROM books WHERE id=$id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);

            ?>
            <form action="process.php" method="post">
               <div class="form-element my-4">
                  <h4>Title</h4>
                  <input type="text" class="form-control" name="title" placeholder="Book title" value="<?php echo $row["title"] ?>">
               </div>
               <div class="form-element my-4">
                  <h4>Author</h4>
                  <input type="text" class="form-control" name="author" placeholder="Author name" value="<?php echo $row["author"] ?>">
               </div>
               <div class="form-element my-4">
                  <h4>Genre</h4>
                  <select name="type" class="form-control">
                     <option value="">Select Book Type</option>
                     <option value="Adventure" <?php if($row["type"]=="Adventure"){echo "selected";} ?>>Adventure</option>
                     <option value="Fantasy" <?php if($row["type"]=="Fantasy"){echo "selected";} ?>>Fantasy</option>
                     <option value="Romantic" <?php if($row["type"]=="Romantic"){echo "selected";} ?>>Romantic</option>
                     <option value="Thriller" <?php if($row["type"]=="Thriller"){echo "selected";} ?>>Thriller</option>
                     <option value="Horror" <?php if($row["type"]=="Horror"){echo "selected";} ?>>Horror</option>
                  </select>
               </div>
               <div class="form-element my-4">
                  <h4>Description</h4>
                  <input type="text" class="form-control" name="description" placeholder="Book Description" value="<?php echo $row["description"] ?>">
               </div>
               <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
               <div class="form-element">
                  <input type="submit" class="btn btn-success" name="edit" value="Save">
               </div>
            </form>
      <?php
         }
      ?>
      
   </div>
</body>
</html>