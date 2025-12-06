<?php
$conn = new mysqli("localhost", "root", "", "employee_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name       = $_POST["name"];
    $email      = $_POST["email"];
    $department = $_POST["department"];
    $position   = $_POST["position"];
    $joining    = $_POST["joining_date"];
    $stmt = $conn->prepare("INSERT INTO employees (name, email, department, position, joining_date) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $department, $position, $joining);
    $stmt->execute();
    $stmt->close();
    $message = "Employee added successfully!";
}
$result = $conn->query("SELECT * FROM employees");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Employee Entry Form</title>
</head>
<body>
<div class="form-container">
  <h2>Employee Entry Form</h2>
  <?php if (!empty($message)): ?>
    <p class="message"><?php echo $message; ?></p>
  <?php endif; ?>
  <form method="POST" action="">
    <label>Full Name</label>
    <input type="text" name="name" required>
    <label>Email</label>
    <input type="email" name="email" required>
    <label>Department</label>
    <select name="department">
      <option>IT</option>
      <option>HR</option>
      <option>Finance</option>
      <option>Sales</option>
      <option>Support</option>
    </select>
    <label>Position</label>
    <input type="text" name="position" required>
    <label>Joining Date</label>
    <input type="date" name="joining_date" required>
    <button type="submit">Add Employee</button>
  </form>
</div>
<?php if ($result && $result->num_rows > 0): ?>
  <div class="form-container">
    <h2>Employee List</h2>
    <table>
      <thead>
        <tr>
          <th>ID</th><th>Name</th><th>Email</th><th>Dept</th><th>Position</th><th>Joining</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo htmlspecialchars($row["name"]); ?></td>
            <td><?php echo htmlspecialchars($row["email"]); ?></td>
            <td><?php echo $row["department"]; ?></td>
            <td><?php echo $row["position"]; ?></td>
            <td><?php echo $row["joining_date"]; ?></td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
<?php endif; ?>
</body>
</html>
