<!DOCTYPE html>
<html lang="en">
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php
  include 'nav.php'; 
  ?>
</head>
<body>
	<div class="container">
    <div class="row">
     <div class="col-4 offset-4 p-4">
      <div class="card">
        <div class="card-body">
          <form action="performanceadd.php" method="POST">
           <label for="Name" class="form-label">Name</label>
           <input type="text" name="name" id="Name" class="form-control" >
           <label for="Grade" class="form-label">Grade</label>
           <input type="text" name="grade" id="Grade" class="form-control" >
           <label for="Feedback" class="form-label">Feedback</label>
           <input type="text" name="feedback" id="Feedback" class="form-control">
           <button type="submit" class="btn btn-primary">Submit</button>
         </form>
       </div>
     </div>
   </div>
 </div>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>