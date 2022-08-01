<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>

    <style>
        input {
            margin-bottom: 10px;
            height: 30px;
            width: 100%;
        }
    </style>
</head>
<body style="display: flex; justify-content: center">
<div class="">
    @if(session('success'))
        {{session('success')}}
    @endif
    <h1>Contact</h1>
    <form action="{{ route('contact.store') }}" method="post">
        @csrf
        <div>
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="email">Email</label><br>
            <input type="text" name="email" id="email" required>
        </div>
        <div>
            <label for="message">Message</label><br>
            <textarea name="message" id="message" cols="30" rows="5" style="width: 100%"></textarea>
        </div>
        <div>
            <button type="submit" style="margin-top: 20px; width: 100%;height: 30px;">Send</button>
        </div>
    </form>
</div>

</body>
</html>
