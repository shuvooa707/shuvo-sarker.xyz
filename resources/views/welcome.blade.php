<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @font-face {
            font-family: 'Elven Common Speak';
            src: url({{ asset('/fonts/elvencommonspeak.ttf') }});
        }

        #life {
            margin-top: 20%;
            text-align: center;
            font-family: 'Elven Common Speak';
            font-size: 50px;
            text-decoration: underline;
        }

        #links-container {
            position: absolute;
            bottom: 10px;
        }
        #links-container a {
            text-decoration: none;
            color: grey
            border: 1px solid black;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <h1 id="life">Life Is Beautiful</h1>
    <div id="links-container">
        <a href="https://github.com/shuvooa707">Github</a>
    </div>
</body>

</html>
