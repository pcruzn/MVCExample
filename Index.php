<!--
author: pablo cruz navea
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome!</title>
</head>

<body>
<form action="./controllers/TicketController.php?buyticket=1" method="post">

<table border="0">
  <tr>
    <td>Date:</td>
    <td>
      <select name="date" id="select">
      	<option>01-01-2016</option>
        <option>02-01-2016</option>
        <option>03-01-2016</option>
        <option>04-01-2016</option>
        <option>05-01-2016</option>
      </select>
    </td>
  </tr>
  <tr>
    <td>Time:</td>
    <td>
      <select name="time" id="select2">
      	<option>10:00</option>
        <option>12:00</option>
        <option>16:00</option>
      </select>
    </td>
  </tr>
  <tr>
    <td>Visa:</td>
    <td>
    <input type="text" name="visa" id="visa" />
    </td>
  </tr>
</table>
<p>
  <input type="submit" name="btnBuy" id="btnBuy" value="Buy!" />
</p>

</form>
<p>Note: no availability for day 2/1/16 at time 16:00.</p>
</body>
</html>
