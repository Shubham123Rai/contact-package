<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact Us any time</h1>
    <form method="post" action="{{route('contact')}}">

        @csrf

        <div class="form-group">
        <input type="text" class="form-control mt-3" name="name" id="" placeholder="Your name"><br>
        <input type="email" class="form-control mt-3" name="email" id="" placeholder="Your email"><br>
        <textarea name="message" id="" class="form-control mt-3" cols="20" rows="5" placeholder="Your email"></textarea><br> 
        <input type="submit" value="Submit">   
        </div>
    </form>
</body>
</html>