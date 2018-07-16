



<!<input type="submit" onclick="window.location='open_a_file.php?show=include.php'">		
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">

		function load(thediv, thefile)
		{
			if(window.XMLHttpRequest)
			{
				xmlhttp = new XMLHttpRequest();	// through the JavaScript XMLHttpRequest object With an HTTP request, a web page can make a request to, and get a response from a web server - without reloading the page. The user will stay on the same page, and he or she will not notice that scripts request pages, or send data to a server in the background.
			}
			else
			{
				xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');	//if XMLHttpRequest object is not created then ActiveXObject is created
																	//limited to internet explorer
			}

			xmlhttp.onreadystatechange = function()
			{
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200)		//200 means not empty Object status integer:404:NOT FOUND, 200:OK
																			//0 = uninitialized 1 = loading 2 = loaded 3 = interactive 4 = complete
				{
					document.getElementById('adiv').innerHTML = xmlhttp.responseText;		//innerhtml-to set/return the html content
				}
			}

			xmlhttp.open('GET', 'include.php', true);
			xmlhttp.send();		//the last parameter is synchronous or asynchronous=true, just get the contents of page
		}
	</script>	
</head>
<body>
	<input type="submit" onclick="load('anotherdiv','include.php');">
	<div id="adiv"></div>
</body>
</html>