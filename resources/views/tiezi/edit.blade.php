<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>修改</h2>
	<form action="/tiezi/20" method="post">
		
		<input type="text" name="asda">
		{{csrf_field()}}
		{{ method_field('PUT') }}
		<button>提交</button>
	</form>

	<h2>删除</h2>
	<form action="/tiezi/40" method="post">
		
		<input type="text" name="asda">
		{{csrf_field()}}
		{{ method_field('DELETE') }}
		<button>提交</button>
	</form>
</body>
</html>