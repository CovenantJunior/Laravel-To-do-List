<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
	<title>Create Todo List</title>
</head>
<body>
    <div>
        <h1>What to do next...</h1>
        <form method="post" action="/todos/create">
            @csrf

            <input type='text' name='title'>

            <input type='submit' name='create' value='add'>

        </form>
    </div>
    
</body>
</html>