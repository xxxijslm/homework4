<?php
  session_start();
  if (isset($_GET["logout"])) {
    unset($_SESSION["uid"]);
    header("Location: index.php");
    exit();
  }
  if (isset($_POST["btnHome"])) {
    header("Location: index.php");
    exit();
  }
  if (isset($_POST["btnOK"])) {
    $userName = $_POST["txtUserName"];
    $userPassword = $_POST["txtPassword"];
    if (empty($userName)) {
      $userNameErr = "Username is required.";
    }
    if (empty($userPassword)) {
      $userPasswordErr = "Password is required.";
    }
    if ($userName != "" and $userPassword != "") {
      header("Location: index.php");
      $_SESSION["uid"] = $userName; 
      exit();
    }
  }
  // else {
  //   echo "Get Form";
  // }
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Lab - Login</title>
  <style>
    .error {
      color : red;
    }
  </style>
</head>
<body>
<form id="form1" name="form1" method="post" action="login.php">
  <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
    <tr>
      <td colspan="2" align="center" bgcolor="#CCCCCC"><font color="#FFFFFF">會員系統 - 登入</font></td>
    </tr>
    <tr>
      <td width="80" align="center" valign="baseline">帳號</td>
      <td valign="baseline">
        <input type="text" name="txtUserName" id="txtUserName" value="<?= $userName ?>" />
        <span class="error"> <?= "*" . $userNameErr ?> </span>
      </td>
    </tr>
    <tr>
      <td width="80" align="center" valign="baseline">密碼</td>
      <td valign="baseline">
        <input type="password" name="txtPassword" id="txtPassword"/>
        <span class="error"> <?= "*" . $userPasswordErr ?> </span>  
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#CCCCCC"><input type="submit" name="btnOK" id="btnOK" value="登入" />
      <input type="reset" name="btnReset" id="btnReset" value="重設" />
      <input type="submit" name="btnHome" id="btnHome" value="回首頁" />
      </td>
    </tr>
  </table>
</form>
</body>
</html>