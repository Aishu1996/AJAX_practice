<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		function findmatch()
		{
			//check for a request
			if(window.XMLHttpRequest)
			{
				xmlhttp = new XMLHttpRequest();			}
			else
			{
				xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
			}

			xmlhttp.onreadystatechange = function()
			{
				if(xmlhttp.readyState == 4 && xmlhttp.readystatus == 200);
				{
					document.getElementById('results').innerHTML = xmlhttp.responseText;
				}
			}

			xmlhttp.open('GET', 'search.php?search_text='+document.search.search_text.value, true);	//appending the value
			xmlhttp.send();

		}

	</script>
	
</head>
<body>
	<form id="search" name="search">
		Type a name:<br>
		<input type="text" name="search_text" onkeyup="findmatch();" >
		
		<input type="submit" value="submit">
	</form>
	
	<div id="results"></div>	

</body>
</html>