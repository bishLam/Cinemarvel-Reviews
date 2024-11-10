<?php
//implement login
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (!empty($_POST["userInputEmail1"]) && !empty($_POST["userInputPassword1"])) {
    include("database.php");
    $username = filter_input(INPUT_POST, "userInputEmail1", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "userInputPassword1", FILTER_SANITIZE_SPECIAL_CHARS);

    $sql = "SELECT * FROM USER WHERE email = '$username'";



    try {
      $result = mysqli_query($conn, $sql);
    } catch (mysqli_sql_exception $e) {
      // echo "Exception occured";
      $_SESSION["error_code"] = " Sql exception"; //0 means sql exceptoin
    }

    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_array($result);

      if (password_verify($password, $row["password"])) {

        $_SESSION["email"] = $username;
        $_SESSION["first_name"] = $row["first_name"];
        $_SESSION["last_name"] = $row["last_name"];
        $_SESSION["member_since"] = $row["member_since"];
        $_SESSION["total_reviews"] = $row["total_reviews"];
        $_SESSION["user_id"] = $row["user_id"];

        header("Location: home.php");
        exit();
      } else {
        $_SESSION["error-code"] = "Wrong password";
      }
    } else {
      // echo "User not found in the database";
      $_SESSION["email"] = null;
      $_SESSION["first_name"] = null;
      $_SESSION["last_name"] = null;
      $_SESSION["member_since"] = null;
      $_SESSION["total_reviews"] = null;
      $_SESSION["user_id"] = null;
      $_SESSION["error_code"] = "User not found in the database"; //1 means user not found in the database
      exit();
    }
  } else {
    $_SESSION["email"] = null;
    $_SESSION["first_name"] = null;
    $_SESSION["last_name"] = null;
    $_SESSION["member_since"] = null;
    $_SESSION["total_reviews"] = null;
    $_SESSION["user_id"] = null;
    $_SESSION["error_code"] = "Username or password cannot be empty";
    //2 means Username or password cannot be null

    // echo"Username or password cannot be null";
    exit();
  }
}
?>