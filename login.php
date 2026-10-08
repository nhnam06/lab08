
<?php
include 'header.inc';
?>

<?php
if (isset($_GET['error'])) {
    echo "<p>Invalid username or password. Please try again.</p>";
}
?>

<form method="post" action="process.php">

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br><br>

    <input type="hidden" name="token" value="N105548039">

    <input type="submit" value="Login">

</form>

<?php
include 'footer.inc';
?>
