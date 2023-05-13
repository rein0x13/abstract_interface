<?php

include 'student.php';

$students = $handler->all();
// var_dump($students);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Last Name</th>
          <th>First Name</th>
          <th>Age</th>
          <th>Course</th>
          <th>Year</th>
          <th>Actions</th>
          <th><button onclick="location='insert-form.html'">+</button></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($students as $student) { ?>
            <tr>
                <td><?php echo $student['id']; ?></td>
                <td><?php echo $student['last_name']; ?></td>
                <td><?php echo $student['first_name']; ?></td>
                <td><?php echo $student['age']; ?></td>
                <td><?php echo $student['course']; ?></td>
                <td><?php echo $student['year']; ?></td>
                <form>
                    <input type="hidden" name="id" value="<?php echo $student['id']; ?>" >
                <td><button type="submit" formmethod="post" formaction="update-form.php" >Update</button></td>
                <td><button type="submit" formmethod="post" formaction="delete.php">-</button></td>
                </form>
            </tr>
        <?php } ?>
      </tbody>
    </table>
  </body>
</html>
