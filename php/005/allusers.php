<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <a href="admin.php" class="btn btn-primary my-5">Back</a>
    </div>
    <div class="table-container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">sr no.</th>
      <th scope="col">name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Dob</th>
      <th scope="col">Gender</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
      <!-- <th scope="col">Handle</th> -->
    </tr>
  </thead>
  <tbody>
    <?php
     include "connect.php";
     $sql = "SELECT * FROM school";
     $res = mysqli_query($conn , $sql);
      if ($res) {
        while ($row = mysqli_fetch_assoc($res)) {
          $id= $row['id'];
          $name= $row['name'];
          $email= $row['email'];
          $phone= $row['phone'];
          $dob= $row['dob'];
          $gender= $row['gender'];
          $address= $row['address'];
          echo '
           <tr>
      <th scope="row">'.$id.'</th>
               <td>'.$name.'</td>
               <td>'.$email.'</td>
               <td>'.$phone.'</td>
               <td>'.$dob.'</td>
               <td>'.$gender.'</td>
               <td>'.$address.'</td>
               <td>
               <button class="btn btn-success"><a href="edit.php?editid='.$id.'" class="text-light">Edit</a></button>
               <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
               </td>
               </tr>';
               
            
        }
      
      }

    ?>
  </tbody>
</table>
    </div>
</body>
</html>