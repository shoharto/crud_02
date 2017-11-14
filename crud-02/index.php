<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="assets/js/bootstrap.min.js"></script>
	<style>
	
	.fa-heartbeat {
  color: red;
}
	</style>
</head>
 
<body>
    <div class="container">
            <div class="row">
                <h3>PHP CRUD By shoharto</h3>
            </div>
            <div class="row">
                <p>
                    <a href="create.php" class="btn btn-success">Create</a>
                </p>
                 
                <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email Address</th>
                          <th>Mobile Number</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                       include 'database.php';
                       $pdo = Database::connect();
                       $sql = 'SELECT * FROM customers ORDER BY id DESC';
                       foreach ($pdo->query($sql) as $row) {
                                echo '<tr>';
                                echo '<td>'. $row['name'] . '</td>';
                                echo '<td>'. $row['email'] . '</td>';
                                echo '<td>'. $row['mobile'] . '</td>';
                                echo '<td width=250>';
                                echo '<a class="btn" href="read.php?id='.$row['id'].'">Read</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="update.php?id='.$row['id'].'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Delete</a>';
                                echo '</td>';
                                echo '</tr>';
                       }
                       Database::disconnect();
                      ?>
                      </tbody>
                </table>
        </div>
		
			<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Dev <i class="fa fa-heartbeat"  aria-hidden="true"></i>
 <a href="https://www.facebook.com/shoharto">Shoharto</a></p> 
</footer>

			
    </div> <!-- /container -->
  </body>
</html>