<html>
<head>
<title>

</title>
<style>
p
{
	color:white;
}
html
{
	background-color:#00BFFF;
}
input
{
	color:blue;
}
select
{
	color:blue;
}
</style>
</head>

<body>
<form name = "myForm">
	<table align = "center">
<tr>
<td>
<p>First Name: </p>
</td>
<td>
<input type = "text" name = "vFirst" value = "" id = "vFirst">
<br/>
</td>
</tr>
	<tr>
	<td>
	</br></br>
	<p>Last Name: </p>
	</td>
	<td>
	</br></br></br>
	<input type = "text" name = "vLast" value = "" id = "vLast">
	<br/>
	</td>
	</tr>
		<tr>
		<td>
		</br></br>
		<p>Email Address: </p>
		</td>
		<td>
		</br></br></br>
		<input type = "text" name = "vEmail" value = "" id = "vEmail">
		<br/>
		</td>
		</tr>
			<tr>
			<td>
			</br></br>
			<p>Password: </p>
			</td>
			<td>
			</br></br></br>
			<input type = "password" name = "vPass" value = "" id = "vPass">
			<br/>
			</td>
			</tr>
				<tr>
				<td>
				</br></br>
				<p>Confirm Password: </p>
				</td>
				<td>
				</br></br></br>
				<input type = "password" name = "vConfirmPass" value = "" id = "vConfirmPass">
				<br/>
				</td>
				</tr>
					<tr>
					<td>
					</br></br>
					<p>Mobile Phone Number: </p>
					</td>
					<td>
					</br></br></br>
					<input type = "number" name = "vNumber" value = "" id = "vNumber">
					<br/>
					</td>
					</tr>
						<tr>
						<td>
						</br></br>
						<p>Gender: </p>
						</td>
						<td>
						</br></br></br>
						<select name = "vGender" id = "vGender">
						<option name = "Male">Male</option>
						<option name = "Male">Female</option>
						</select>
						<br/>
						</td>
						</tr>
							<tr>
							<td>
							</br></br>
							<p>Admin: </p>
							</td>
							<td>
							</br></br></br>
							
							<select name = "vAdmin" value = "" id = "vAdmin">
							<option name = "0">0</option>
							<option name = "1">1</option>
							</select>
							<br/>
							</td>
							</tr>
								<td>
								</br></br></br>
								<input type = "button" onClick = "validateRegistration()" value = "Submit Here">
								<br/>
								</td>
								
								</tr>
								<tr> Already have an account? <a href="login.php"> Log-in here!</a></tr>
	</table>							
</form name = "myForm2" action = "" method = "post">
	<form name = "myForm2" action = "insertuser.php" method = "post">
	<input type = "hidden" name = "pFirst" id = "pFirst">
	<input type = "hidden" name = "pLast" id = "pLast">
	<input type = "hidden" name = "pEmail" id = "pEmail">
	<input type = "hidden" name = "pPass" id = "pPass">
	<input type = "hidden" name = "pNumber" id = "pNumber">
	<input type = "hidden" name = "pGender" id = "pGender">
	<input type = "hidden" name = "pAdmin" id = "pAdmin">
	</form>
	<script>
	function validateRegistration()
	{
		var firstName = document.myForm.vFirst.value;
		var lastName = document.myForm.vLast.value;
		var emailAddress = document.myForm.vEmail.value;
		var passWord = document.myForm.vPass.value;
		var confirmPass = document.myForm.vConfirmPass.value;
		var numBer = document.myForm.vNumber.value;
		var	genDer = document.myForm.vGender.value;
		var adMin = document.myForm.vAdmin.value;
		var i; var cpt = 0; var small = 0; var symbol = 0; var num = 0; var atCount = 0; var dotCount = 0;
		var validatePass = passWord.split("");
		var validateEmail = emailAddress.split("");
			for(i=0;i < validateEmail.length;i++)
			{
			if(emailAddress.charCodeAt(i) ==  64)
		{
			atCount++;
		}
			else if(emailAddress.charCodeAt(i) ==  46)
			{
				dotCount++;
			}
			else
			{	
				dotCount+=0;
				atCount+=0;
			}
			}
			for(i=0;i < validatePass.length;i++)
			{
		if(passWord.charCodeAt(i)>=65 && passWord.charCodeAt(i)<=90)
		{
			cpt++;
		}
		else if(passWord.charCodeAt(i)>=97 && passWord.charCodeAt(i)<=122)
		{
			small++;
		}
		else if(passWord.charCodeAt(i)>=48 && passWord.charCodeAt(i)<=57)
		{
			num++;
		}
		else
		{
			symbol++;
		}
			}
		if(firstName == "" || lastName == "" || emailAddress == "" || passWord == "" || confirmPass == "" || numBer == "" || genDer == "" || adMin == "")
		{
			alert("Input all the required information...");
		}
		else
		{
			if(passWord != confirmPass)
			{
				alert("Your password does not valid to your confirm password");
			}
		else
		{
			if(cpt == 0 || num == 0 || small == 0 || symbol==0 || passWord.length<8)
			{
				alert("your password must have 1 capital, 1 small, 1 number, 1 symbol and has a length of 8 characters!");
			}
			else
			{
				if(numBer.length != 11)
				{
						alert("Mobile number  must consist only 11 digits");
				}
				else
				{
					if(atCount > 1 || atCount == 0)
					{
							alert("wrong email address format");
					}
				else
				{
					if(dotCount > 1 || dotCount == 0)
						{
							alert("wrong email address format");
						}
					else
					{
			document.getElementById("pFirst").value = firstName;
			document.getElementById("pLast").value = lastName;
			document.getElementById("pEmail").value = emailAddress;
			document.getElementById("pPass").value = passWord;
			document.getElementById("pNumber").value = numBer;
			document.getElementById("pGender").value = genDer;
			document.getElementById("pAdmin").value = adMin;
			document.myForm2.submit();
						}
				}
				}
			}
		}
		}
	}
	</script>
</body>
</html>