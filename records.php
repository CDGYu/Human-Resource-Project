<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>HR Dashboard</title>
</head>
<body>


  <?php
  include 'nav.php'; 
  ?>
  <div class="container">
    <div class="row">
      <div class="col-6 offset-3">
        <h2 class="text-bg-success">Employee Records</h2>

        
        <form action="records.php" method="post">
          <a class="btn btn-primary" href="RecordsForm.php" role="button">Add</a>
          <button type="submit" name="sort_btn" class="btn btn-primary" <?php echo isset($_POST["sort_btn"]) ? "disabled" : "enabled";?>>Sort</button>
          <button type="submit" name="unsort_btn" class="btn btn-primary" <?php echo isset($_POST["unsort_btn"]) ? "disabled" : "enabled";?>>UnSort</button>
        </form>
        <?php
        if (isset($_POST['sort_btn'])) {
          include 'recordsSortedView.php'; 
        }
        elseif (isset($_POST['unsort_btn'])) {
          include 'recordsView.php'; 
        }else{
        include 'recordsView.php'; 
        }
        ?>
      </div>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>