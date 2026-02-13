<!DOCTYPE html>
<html>
<head>
    <title>Incident Manager</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f5f5f5; }
        .container { background-color: #455481; color: white; padding: 30px; border-radius: 15px; max-width: 500px; margin: auto; }
        input, select, textarea { width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: none; }
        button { background-color: #222; color: white; padding: 10px; width: 100%; border-radius: 5px; border: none; }
        h2 { text-align: center; }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
