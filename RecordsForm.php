<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@eonasdan/tempus-dominus@6.9.4/dist/css/tempus-dominus.min.css" crossorigin="anonymous">
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
          <form action="recordsAdd.php" method="POST">
           <label for="Name" class="form-label">Name</label>
           <input type="text" id="Name" class="form-control" name="name" >
           <label for="Department" class="form-label">Department</label>
           <input type="text" id="Department" class="form-control" name="department">
           <label for="Position" class="form-label">Position</label>
           <input type="text" id="Position" class="form-control" name="position">
           <label for="datetimepicker1Input" class="form-label">Hire Date</label>
           <div class="input-group log-event" id="datetimepicker1" data-td-target-input="nearest" data-td-target-toggle="nearest">
            <input id="datetimepicker1Input" type="text" name="hiredate" class="form-control" data-td-target="#datetimepicker1">
            <span class="input-group-text" data-td-target="#datetimepicker1" data-td-toggle="datetimepicker">
              <i class="fa-solid fa-calendar-days"></i>
            </span>
          </div>
          <label for="Salary" class="form-label">Salary</label>
          <input type="text" id="Salary" class="form-control" name="salary">

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha256-BRqBN7dYgABqtY9Hd4ynE+1slnEw+roEPFzQ7TRRfcg=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@eonasdan/tempus-dominus@6.9.4/dist/js/tempus-dominus.min.js" crossorigin="anonymous"></script>

<script type="text/javascript">
  const picker = new tempusDominus
  .TempusDominus(document.getElementById('datetimepicker1'),{
    display: {
      components: {
        clock: false,
      },
    },
    localization: {
      format: 'yyyy-MM-dd',
    }
  });

</script>
</html>