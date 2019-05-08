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
  <table class="table table-bordered text-center">
    <thead>
      <tr>
        <th>Employee ID</th>
        <th>Employee Name</th>
        <th>Medical Allowance</th>
        <th>Basic</th>
        <th>HRA</th>
        <th>TA</th>
        <th>DA</th>
        <th>Incentive</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><input id="edit" type="button" class="btn" value="Edit"></td>
    </tbody>
  </table>
</div>

<div id="overlayform" class="container-fluid" style="display:none;">
  <form id="form" action="" class="p-5 mt-3">
    <div class="form-group">
      <label for="eid">Employee ID:</label>
      <input type="text" class="form-control" id="eid" placeholder="Employee ID" name="eid" disabled>
    </div>
    <div class="form-group">
      <label for="ename">Employee Name:</label>
      <input type="text" class="form-control" id="ename" placeholder="Employee name" name="ename" disabled>
    </div>
    <div class="form-group">
      <label for="ma">Medical Allowance:</label>
      <input type="text" class="form-control" id="ma" placeholder="Enter medical allowance" name="ma">
    </div>
    <div class="form-group">
      <label for="basic">Basic:</label>
      <input type="text" class="form-control" id="basic" placeholder="Enter basic" name="basic">
    </div>
    <div class="form-group">
      <label for="hra">HRA:</label>
      <input type="text" class="form-control" id="hra" placeholder="Enter HRA" name="hra">
    </div>
    <div class="form-group">
      <label for="ta">TA:</label>
      <input type="text" class="form-control" id="ta" placeholder="Enter TA" name="ta">
    </div>
    <div class="form-group">
      <label for="da">DA:</label>
      <input type="text" class="form-control" id="da" placeholder="Enter DA" name="da">
    </div>
    <div class="form-group">
      <label for="incentive">Incentive:</label>
      <input type="text" class="form-control" id="incentive" placeholder="Enter incentive" name="incentive">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-primary">Update</button>
      <button type="button" class="btn btn-primary cancel">Cancel</button>
    </div>
  </form>
</div>

</body>
</html>
