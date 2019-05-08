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
  <form class="container col-sm-10 text-right" action="">
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

<nav class="container p-3">
  <ul class="nav nav-pills justify-content-center">
    <li class="nav-item" style="border:1px solid blue;">
      <a id="insert" class="nav-link pl-4 pr-4">Insert</a>
    </li>
    <li class="nav-item" style="border:1px solid blue;">
      <a id="update" class="nav-link pl-4 pr-4">Update</a>
    </li>
    <li class="nav-item" style="border:1px solid blue;">
      <a id="delete" class="nav-link pl-4 pr-4">Delete</a>
    </li>
  </ul>
</nav>

<div class="container">
  <table class="table table-bordered text-center">
    <thead>
      <tr>
        <th>Employee ID</th>
        <th>Employee Name</th>
        <th>Date of Birth</th>
        <th>Phone Number</th>
        <th>Designation</th>
        <th>Basic</th>
        <th class="select">Select</th>
      </tr>
    </thead>
    <tbody>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="select"><input type="radio"></td>
    </tbody>
  </table>
</div>

<div id="overlayiform" class="container-fluid" style="display:none;">
  <form id="form" action="" class="p-5 mt-3">
    <div class="form-group">
      <label for="eid">Employee ID:</label>
      <input type="text" class="form-control" id="eid" placeholder="Employee ID" name="eid">
    </div>
    <div class="form-group">
      <label for="ename">Employee Name:</label>
      <input type="text" class="form-control" id="ename" placeholder="Employee name" name="ename">
    </div>
    <div class="form-group">
      <label for="dob">Date of Birth:</label>
      <input type="date" class="form-control" id="dob" name="dob">
    </div>
    <div class="form-group">
      <label for="phn">Phone Number:</label>
      <input type="text" class="form-control" id="phn" placeholder="Enter phone number" name="phn">
    </div>
    <div class="form-group">
      <label for="designation">Designation:</label>
      <input type="text" class="form-control" id="designation" placeholder="Enter designation" name="designation">
    </div>
    <div class="form-group">
      <label for="basic">Basic:</label>
      <input type="text" class="form-control" id="basic" placeholder="Enter basic" name="basic">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-primary">Insert</button>
      <button type="button" class="btn btn-primary cancel">Cancel</button>
    </div>
  </form>
</div>

<div id="overlayuform" class="container-fluid" style="display:none;">
  <form id="form" action="" class="p-5 mt-3">
    <div class="form-group">
      <label for="eid">Employee ID:</label>
      <input type="text" class="form-control" id="eid" placeholder="Employee ID" name="eid">
    </div>
    <div class="form-group">
      <label for="ename">Employee Name:</label>
      <input type="text" class="form-control" id="ename" placeholder="Employee name" name="ename">
    </div>
    <div class="form-group">
      <label for="dob">Date of Birth:</label>
      <input type="date" class="form-control" id="dob" name="dob">
    </div>
    <div class="form-group">
      <label for="phn">Phone Number:</label>
      <input type="text" class="form-control" id="phn" placeholder="Enter phone number" name="phn">
    </div>
    <div class="form-group">
      <label for="designation">Designation:</label>
      <input type="text" class="form-control" id="designation" placeholder="Enter designation" name="designation">
    </div>
    <div class="form-group">
      <label for="basic">Basic:</label>
      <input type="text" class="form-control" id="basic" placeholder="Enter basic" name="basic">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-primary">Update</button>
      <button type="button" class="btn btn-primary cancel">Cancel</button>
    </div>
  </form>
</div>

</body>
</html>
