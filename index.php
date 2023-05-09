<!DOCTYPE html>
<html>
<head>
 
</head>
<body>

<div>
  <h1>PHP + MySQL CRUD Demo</h1>
  <p>Create, read, update, and delete records below</p>
  <table class="table">
    <tbody>
      <?php include 'read.php'; ?>
    </tbody>
  </table>
  <form action="create.php" method="POST">
    <label for="name">Name:</label>
    <input type="text"  id="name" name="name">
    <label for="score">Score:</label>
    <input type="number"  id="score" name="score">
    <button type="submit">Add</button>
  </form>
</div>
</body>
</html>
