<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Redirect To Current Project</title>
</head>
<body>
	<script type="text/javascript">

(function() {
		const url = ["http://localhost/phpmyadmin/index.php","http://localhost/protfolio"];

		const url_length = url.length;
		if(url_length==0){
			location.replace("http://localhost/index.php");
		}
		for (let i = 0; i < url_length; i++) {
			if((url_length-1)==i){
				location.replace(url[i]);
			}
			else{
				window.open(url[i]);
			}
		}
		})();
	</script>
</body>
</html>