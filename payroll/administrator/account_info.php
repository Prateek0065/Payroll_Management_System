<!DOCTYPE html>
<html lang="en">
<head>
  <title>Payroll Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="administrator.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="administrator.js"></script>
</head>
<body>

<div class="jumbotron row m-0">
  <h1 class="container col-sm-12 text-center">ADMINISTRATOR</h1>
  <form class="container col-sm-10 text-right">
    <input type="submit" value="Logout"/>
  </form>
  <nav class="container">
    <ul class="nav nav-pills justify-content-center">
      <li class="nav-item">
        <a class="nav-link pl-4 pr-4" href="manage_employee.php">Manage Employee</a>
      </li>
      <li class="nav-item">
        <a class="nav-link pl-4 pr-4" href="manage_salary.php">Manage Salary</a>
      </li>
      <li class="nav-item">
        <a class="nav-link pl-4 pr-4" href="account_info.php">Account Information</a>
      </li>
    </ul>
  </nav>
</div>

<div class="container">
  <table class="table">
      <tr class="row m-0">
        <th class="col-sm-2">Administrator ID</th>
        <td class="col-sm-10"></td>
      </tr>
      <tr class="row m-0">
        <th class="col-sm-2">Name</th>
        <td class="col-sm-10"></td>
      </tr>
      <tr class="row m-0">
        <th class="col-sm-2">Company Name</th>
        <td class="col-sm-10"></td>
      </tr>
      <tr class="row m-0">
        <th class="col-sm-2">Branch Name</th>
        <td class="col-sm-10"></td>
      </tr>
      <tr class="row m-0">
        <th class="col-sm-2">Department</th>
        <td class="col-sm-10"></td>
      </tr>
      <tr class="row m-0">
        <th class="col-sm-2">Designation</th>
        <td class="col-sm-10"></td>
      </tr>
      <tr class="row m-0">
        <th class="col-sm-2">Password</th>
        <td class="col-sm-9">*****</td>
        <td class="col-sm-1"><input id="edit" type="button" class="btn" value="Edit"/></td>
      </tr>
  </table>
</div>

<div id="overlayform" class="container-fluid" style="display:none;">
  <form id="form" action="" class="p-5 mt-3">
    <div class="form-group">
      <label for="opswd">Old Password:</label>
      <input type="password" class="form-control" id="opswd" placeholder="Enter old password" name="opswd">
    </div>
    <div class="form-group">
      <label for="npswd">New Password:</label>
      <input type="password" class="form-control" id="npswd" placeholder="Enter new password" name="npswd">
    </div>
    <div class="form-group">
      <label for="cpswd">Confirm Password:</label>
      <input type="password" class="form-control" id="cpswd" placeholder="Confirm password" name="cpswd">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-primary">Done</button>
      <button type="button" class="btn btn-primary cancel">Cancel</button>
    </div>
  </form>
</div>

</body>
</html>
