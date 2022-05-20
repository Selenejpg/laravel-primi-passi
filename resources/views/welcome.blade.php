<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="content">
        <div style="display: flex; justify-content: center; margin-top: 30px; margin-bottom: 30px;" class="title m-b-md">
            Hello World!
        </div>
        <div style="display: flex; justify-content: center; margin-top: 30px; margin-bottom: 30px;">Se sei giù e vuoi ridere, clicca su Meme. Se vuoi vedere qualcosa di adorabile clicca su Pinguino</div>
        <div style="display: flex; justify-content: center; margin-top: 30px;">
            <a style="margin-right: 30px;" href="{{ url('/meme') }}">Meme</a>
            <a href="{{ url('/pinguino') }}">Pinguino</a>    
        </div>
    </div>
</body>

</html>

