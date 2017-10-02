function submit()
{
	let username = document.getElementById("username");
	let password = document.getElementById("password");
	let badUsername = true;
	let atSymbol = false;
	let period = true;
	for(i = 0; i<username.length;i++)
	{
		if(username[i]=="@")
		{
			atSymbol = true;
		}
		if(atSymbol)
		{
			if(username[i+1]==".")
			{
				period = true;
			}
		}
		if(period)
		{
			if(username[i+2]=="c")
			{
				if(username[i+3]=="o")
				{
					if(username[i+4]=="m")
					{
						if(username[i+5]==undefined)
						{
							badUsername = false;
						}
					}
				}
			}
		}
	}
	if(badUsername)
	{
		prompt("The username is not a valid email, please try again");
	}
	else if(username == "" || username == undefined)
	{
		prompt("The username cannot be empty");
	}
	else if(password == "" || password == undefined)
	{
		prompt("The password cannot be empty");
	}
	else if(!document.getElementById("r1").checked && !document.getElementById("r2").checked && !document.getElementById("r3").checked)
	{
		prompt("You must choose a shipping option");
	}
	else if(!document.getElementById("cat").checked &&!document.getElementById("1000").checked &&!	document.getElementById("goonies").checked &&!document.getElementById("grapes").checked &&!document.getElementById("lamp").checked &&!document.getElementById("greyCat").checked)
	{
		prompt("You must choose a product to buy");
	}
}
