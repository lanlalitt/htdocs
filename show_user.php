<?php
    session_start();
    //9.fetch and delete record
    include_once 'dbconnectt.php';

    // fetch records
    $sql = "SELECT * FROM users ORDER BY user_id DESC";
    $result = mysqli_query($con, $sql);
    $cnt = 1;

    // delete record
    if (isset($_GET['user_id'])) {
        $sql = "DELETE FROM users where user_id = " . $_GET['user_id'];
        mysqli_query($con, $sql);
        header("location: show_user.php");
    }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" >
     <title> Admin Users - LAMAI GARDREN </title>
     <link rel="stylesheet" href="bootstrap.min.css" type="text/css" />
 </head>
 <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="">LAMAI GARDREN</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <legend> Show All Users </legend>

                <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> User Name </th>
                            <th> E-Mail </th>
                            <th> Password </th>
                            <th colspan="2" style="text-align:center"> Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                    <!--10.show all users in this part of table -->
                    <?php while ($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $cnt++; ?></td>
                            <td><?php echo $row['user_name']; ?></td>
                            <td><?php echo $row['user_email']; ?></td>
                            <td><?php echo $row['user_passwd']; ?></td>
                            <td>
                                <input type="button" value="ลบ" name="btn-delete" class="btn btn-danger" 
                                onclick="delete_user(<?php echo $row['user_id']; ?>);">
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                </div>
                <!--12.display number of records -->
                <div>
                    <?php echo mysqli_num_rows($result) . " record(s) found.";?>
                </div>
            </div>
        </div>
    </div>
    <!--11.JavaScript for edit and delete actions -->
    <script>
        //delete
        function delete_user(id) {
            if (confirm("Are you sure to delete this record?")){
                window.location.href="show_user.php?user_id=" + id;
            }
        }   
    </script>

 </body>
 </html>