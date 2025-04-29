<?php
	include ("assets/controller/cLogin.php");
	$p = new mylogin();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post">
  <table width="400" border="1" align="center" cellpadding="5" cellspacing="0">
    <tbody>
      <tr>
        <td colspan="2" align="center" valign="middle">Đăng nhập</td>
      </tr>
      <tr>
        <td width="144" align="left" valign="middle">USERNAME:</td>
        <td width="230" align="left" valign="middle"><input type="text" name="txtUsername" id="txtUsername"></td>
      </tr>
      <tr>
        <td align="left" valign="middle">PASSWORD:</td>
        <td align="left" valign="middle"><input type="password" name="txtPassword" id="txtPassword"></td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="middle"><input type="submit" name="nut" id="nut" value="Đăng nhập">
        <input type="reset" name="reset" id="reset" value="Reset"></td>
      </tr>
    </tbody>
  </table>
</form>
<div align="center">
<?php
	switch($_POST['nut'])
	{
		case 'Đăng nhập':
		{
			$user = $_REQUEST['txtUsername'];
			$pass = $_REQUEST['txtPassword'];
			if($user!='' and $pass!='')
			{
				if($p->getTKND($user,$pass)==-1)
				{
					echo 'Sai username hoặc passwords';
				}
						
			}
			else
			{
				echo 'Vui lòng nhập đầy đủ thông tin';
			}
			break;
		}
	}
?>
</div>
</body>
</html>