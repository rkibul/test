
function validateForm() 
{
	var i = document.forms["myForm"]["itmname"].value;
	var t = document.forms["myForm"]["type"].value;
    var resname = document.forms["myForm"]["resname"].value;
	var adr = document.forms["myForm"]["address"].value;
	var price = document.forms["myForm"]["price"].value;
	
	
  if (i == "")
	{ 
        alert("Item Name is required");
        document.myForm.itmname.focus();
        return false;
	}

	
	if (t == "")
	{
        alert("Please enter item type");
        document.myForm.type.focus();
        return false;
	}
	
    if (resname == "")
	{ 
        alert("Please enter restaurant name");
        document.myForm.resname.focus();
        return false;
	}
	if (adr == "")
	{ 
        alert("Please enter the location");
        document.myForm.address.focus();
        return false;
	}
     

	 

	if (price == "")
	{ 
        alert("Please enter item price");
        document.myForm.price.focus();
        return false;
	}

	
}