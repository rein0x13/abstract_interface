<?php 

include 'student.php';

    $student = $handler->all($_POST['id']);
    

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
    <form>
      <label for="last_name">Last Name: </label>
      <input type="text" name="last_name" id="last_name" value="<?php echo $student['last_name']; ?>"  required />
      <label for="first_name">First Name: </label>
      <input type="text" name="first_name" id="first_name" value="<?php echo $student['first_name']; ?>"/>
      <label for="age">Age: </label>
      <input type="number" name="age" id="age" min="1" max="200" value="<?php echo $student['age']; ?>" />
      <label for="course">Course: </label>
      <input type="text" name="course" id="course" value="<?php echo $student['course']; ?>" required />
      <label for="year">Year: </label>
      <input type="number" name="year" id="year" min="1" max="5" value="<?php echo $student['year']; ?>" />
      <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
      <button type="submit" formmethod="post" formaction="update.php">Update</button>
    </form>
  </body>
</html>
