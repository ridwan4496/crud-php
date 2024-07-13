<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Book Details</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <style>
      .book-details {
         background: #f5f5f5;
         padding: 50px;
      }
   </style>
</head>
<body>
   <div class="container">
      <header class="d-flex justify-content-between my-4">
         <h1>Book Details</h1>
         <div>
            <a href="index.php" class="btn btn-primary">Back</a>
         </div>
      </header>
      <div class="book-details">
         <?php 
            if(isset($_GET["id"])){
               $id = $_GET["id"];
               include("connect.php");
               $sql = "SELECT * FROM books WHERE id=$id ";
               $result = mysqli_query($conn, $sql);
               $row = mysqli_fetch_array($result);
               ?>
                  <h4>Title</h4>
                  <p><?php echo $row["title"] ?></p>   
                  <h4>Author</h4>
                  <p><?php echo $row["author"] ?></p>   
                  <h4>Type</h4>
                  <p><?php echo $row["type"] ?></p>   
                  <h4>Description</h4>
                  <p><?php echo $row["description"] ?></p>   
               <?php
            }
         ?>
      </div>
   </div>
</body>
</html>