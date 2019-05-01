<!DOCTYPE html>
<?php require 'framework/framework.globals.php'; ?>
<?php
if (isset($_SESSION["TOKEN"])) {
  if ($_SESSION["TOKEN"] !== "false") {
    header("Location: /dashboard.php");
  }
}
?>
<?php $_SESSION["PAGE_NAME"] = "HOME"; ?>
<html lang="en">
  <?php include 'framework/framework.head.php'; ?>
  <body>
    <?php include 'framework/template.navbar.php'; ?>
    <?php include 'framework/template.content.php'; ?>
    <?php include 'framework/template.footer.php'; ?>

    <?php include 'framework/framework.jslibs.php'; ?>
  </body>
</html>
