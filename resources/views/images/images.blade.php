<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Images</title>
</head>
<body>
    <img src="{{ $data["image_url"] }}" loading="lazy">
    <br>
    <b>Machine ID: {{$data["server_ip"]}}</b>
</body>
</html>