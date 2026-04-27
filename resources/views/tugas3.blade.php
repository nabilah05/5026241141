<!-- bs4 icon -->
<!DOCTYPE html>
<html>

<head>
  <title>Campus Service App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <style>
    body {
      background: #f5f5f5;
    }

    .menu-icon {
      font-size: 35px;
      margin-bottom: 10px;
    }

    .card {
      text-align: center;
    }
  </style>

</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="#"><i class="fas fa-graduation-cap"></i> myCampus </a>

    <div class="ml-auto">
      <button class="btn btn-outline-light">
        Notifications <span class="badge badge-light">3</span>
      </button>
    </div>
  </nav>


  <div class="container mt-4">

    <h3 class="text-center mb-4">Student Dashboard</h3>

    <div class="row">

      <div class="col-md-3">
        <div class="card p-3 shadow">
          <i class="fas fa-book menu-icon text-primary"></i>
          <h6>Courses</h6>
          <button class="btn btn-primary btn-sm">Open</button>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card p-3 shadow">
          <i class="fas fa-calendar-alt menu-icon text-success"></i>
          <h6>Schedule</h6>
          <button class="btn btn-success btn-sm">Open</button>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card p-3 shadow">
          <i class="fas fa-file-alt menu-icon text-warning"></i>
          <h6>Assignments</h6>
          <button class="btn btn-warning btn-sm">View</button>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card p-3 shadow">
          <i class="fas fa-chart-bar menu-icon text-info"></i>
          <h6>Grades</h6>
          <button class="btn btn-info btn-sm">Check</button>
        </div>
      </div>

      <div class="col-md-3 mt-3">
        <div class="card p-3 shadow">
          <i class="fas fa-comments menu-icon text-danger"></i>
          <h6>Forum</h6>
          <button class="btn btn-danger btn-sm">Join</button>
        </div>
      </div>

      <div class="col-md-3 mt-3">
        <div class="card p-3 shadow">
          <i class="fas fa-user menu-icon text-secondary"></i>
          <h6>Profile</h6>
          <button class="btn btn-secondary btn-sm">Edit</button>
        </div>
      </div>

      <div class="col-md-3 mt-3">
        <div class="card p-3 shadow">
          <i class="fas fa-envelope menu-icon text-primary"></i>
          <h6>Messages</h6>
          <button class="btn btn-primary btn-sm">Read</button>
        </div>
      </div>

      <div class="col-md-3 mt-3">
        <div class="card p-3 shadow">
          <i class="fas fa-cog menu-icon text-dark"></i>
          <h6>Settings</h6>
          <button class="btn btn-dark btn-sm">Open</button>
        </div>
      </div>

      <div class="col-md-3 mt-3">
        <div class="card p-3 shadow">
          <i class="fas fa-book-reader menu-icon text-success"></i>
          <h6>Library</h6>
          <button class="btn btn-success btn-sm">Browse</button>
        </div>
      </div>

      <div class="col-md-3 mt-3">
        <div class="card p-3 shadow">
          <i class="fas fa-user-check menu-icon text-primary"></i>
          <h6>Attendance</h6>
          <button class="btn btn-primary btn-sm">Check</button>
        </div>
      </div>

      <div class="col-md-3 mt-3">
        <div class="card p-3 shadow">
          <i class="fas fa-bullhorn menu-icon text-danger"></i>
          <h6>Announcements</h6>
          <button class="btn btn-danger btn-sm">View</button>
        </div>
      </div>

      <div class="col-md-3 mt-3">
        <div class="card p-3 shadow">
          <i class="fas fa-credit-card menu-icon text-warning"></i>
          <h6>Payments</h6>
          <button class="btn btn-warning btn-sm">Pay</button>
        </div>
      </div>

      <div class="col-md-3 mt-3">
        <div class="card p-3 shadow">
          <i class="fas fa-search menu-icon text-info"></i>
          <h6>Search</h6>
          <button class="btn btn-info btn-sm">Find</button>
        </div>
      </div>

      <div class="col-md-3 mt-3">
        <div class="card p-3 shadow">
          <i class="fas fa-certificate menu-icon text-warning"></i>
          <h6>Certificates</h6>
          <button class="btn btn-warning btn-sm">View</button>
        </div>
      </div>

      <div class="col-md-3 mt-3">
        <div class="card p-3 shadow">
          <i class="fas fa-question-circle menu-icon text-dark"></i>
          <h6>Help</h6>
          <button class="btn btn-dark btn-sm">Support</button>
        </div>
      </div>

      <div class="col-md-3 mt-3">
        <div class="card p-3 shadow">
          <i class="fas fa-sign-out-alt menu-icon text-danger"></i>
          <h6>Logout</h6>
          <button class="btn btn-danger btn-sm">Exit</button>
        </div>
      </div>

    </div>
  </div>

  <p></p>

</body>

</html>