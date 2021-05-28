<html>	
<body>
<head>
</head>
<h1 style="padding-left: 400px;">Registration form</h1>
<table style="margin: 80px;padding: 30px; background-color: blue;">
<form  method="post" action="process.php">
<tr><td>
	Name:
	 <input type="text" name="txt1"><br/></td>
</tr>
<tr><td>
	Age: 
	 <input type="text" name="txt2"><br/></td>
</tr>
<tr><td>
	Number: 
	 <input type="number" name="txt3"><br/></td>
</tr>
<tr><td>
	Email: 
	  <input type="email" name="txt4"><br/></td>
</tr>
<tr><td>
	Date of birth:
	<input type="Date" name="txt5" /> <br/></td>
</tr>
<tr><td>
	Form Registration date and Time: 
	 <input type="datetime-local" name="txt6"><br/></td>
</tr>
<tr><td>
    Gender: 
     <input type="radio" name="txt7" value="male" />Male
     <input type="radio" name="txt7" value="female" />Female
     <input type="radio" name="txt7" value="other" />Other<br/></td>
 </tr>
 <tr><td>
 	City:<input list="lang" name="txt8">
          <datalist id="lang">
          <option value="DEMAI">Mehsana</option>     
          <option value="KAPADVANJ">Gandhinagar</option>
          <option value="AHEMDABAD">Ahemdabad</option>
          <option value="SURAT">Surat</option>
          <option value="VADODARA">Vadodara</option>
          </datalist> <br/>
 </td>
</tr>
 <tr><td>
	Favourite color: 
	 <input type="color" name="txt9"><br/></td>
</tr>
<tr><td>
	Submit: 
	 <input type="Submit" name="Submit">
</td>
</tr>
</form>
</table>
</body>
</html>