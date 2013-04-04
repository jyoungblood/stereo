<!DOCTYPE html>
<html>
<head>

	<title>{{pagetitle}}</title>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />

	<link rel="stylesheet" href="{{css}}/global.css" />
	<script data-controller="{{control_client}}" id="js_init" data-main="{{js}}/_global" src="{{js}}/stereo/require.js"></script>

</head>
<body id="{{control_server}}">


<div id="wrap">
	<div id="main" class="clearfix">

		<div id="head">

		</div>
	
		<div id="content">
{{template_content}}
		</div>

	</div>
</div>



<div id="foot"></div>



</body>
</html>
