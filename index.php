<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.datatables.net/v/dt/dt-2.1.8/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-center my-3 fw-bold">Crud Application using php-oop Ajax</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <h4 class="text-primary ">All users in database</h4>
            </div>
            <div class="col-lg-6">
                <button class="btn btn-primary m-1 float-right" data-toggle="modal" data-target="#addModal"><i class="fa-solid fa-user-plus"></i>&nbsp;&nbsp;Add new user</button>
                <a href="" class="btn btn-success m-1 float-right"> <i class="fas fa-table fa-lg"></i>&nbsp;Export to excel</a>
            </div>
        </div>
        <hr class="my-2">

        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive" id="showUser">
                    <table class="table table-striped table-sm table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>FIRST_NAME</th>
                                <th>LAST_NAME</th>
                                <th>E-MAIL</th>
                                <th>PHONE</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 1; $i <= 100; $i++): ?>
                                <tr class="text-center text-secondary">
                                    <td><?= $i ?></td>
                                    <td>john <?= $i ?></td>
                                    <td>doe <?= $i ?></td>
                                    <td>john@gmail.com <?= $i ?></td>
                                    <td>659874321 <?= $i ?></td>
                                    <td>
                                        <a href="" title="View Details" class="text-success"><i class="fas fa-info-circle fa-lg"></i></a>&nbsp;&nbsp;
                                        <a href="" title="Edit" class="text-primary"><i class="fas fa-edit fa-lg"></i></a>&nbsp;&nbsp;
                                        <a href="" title="Delete" class="text-danger"><i class="fas fa-trash-alt fa-lg"></i></a>&nbsp;&nbsp;
                                    </td>
                                </tr>
                            <?php endfor; ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Model for add user -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post" id="form-data">
            <div class="form-group">
                <input type="text" name="fname" class="form-control" placeholder="First name" required>
            </div>
            <div class="form-group">
                <input type="text" name="lname" class="form-control" placeholder="Last name" required>
            </div>
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="tel" name="phone" class="form-control" placeholder="Phone" required>
            </div>
            <div class="form-group">
                <input type="submit" name="insert" id="insert" value="Add User" class="btn btn-info btn-block">
            </div>
        </form>
      </div>      
    </div>
  </div>
</div>






    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-2.1.8/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(function(){
            $("table").DataTable()
        })
    </script>


</body>

</html>