<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Laravel</title>


</head>
<body >
	
		<form action="https://uat.esewa.com.np/epay/main" method="POST">
			<input value="10" name="tAmt" >
			<input value="10" name="amt" >
			<input value="0" name="txAmt" >
			<input value="0" name="psc" >
			<input value="0" name="pdc" >
			<input value="EPAYTEST" name="scd" >
			<input value="8918123f-c0ab-4d82-ad51-467ae3b7b2a55" name="pid" >
			<input value="{{route('esewa.success')}}"  name="su">
			<input value="{{route('esewa.fail')}}"  name="fu">
			<input value="Submit" type="submit">
		</form>
</body>
</html>
