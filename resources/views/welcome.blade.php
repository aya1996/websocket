<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="https://js.pusher.com/7.0.3/pusher.min.js"></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .msg {
            width: 100%;
            height: 100%;
            background-color: blue;
            color: white;
            margin: auto position: fixed;
            top: 0;
            left: 0;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

    </style>
</head>
<body class="antialiased">

    <div class="msg">
        <p> Messages <span id="demo"></span></p>
    </div>

    <script>
        /*Echo.channel('events')
            .listen('RealTimeMessage', (e) => {
                setTimeout(() => {
                    console.log('RealTimeMessage: ', e.message);
                }, 7000);

                document.getElementById('demo').innerHTML = e.message;

            });*/


        Echo.private('App.Models.User.1')
            .notification((notification) => {
                console.log(notification.message);
                document.getElementById("demo").innerHTML = notification.message;
            });
        Echo.private('App.Models.User.99')
            .notification((notification) => {
                console.log(notification.message);
            });

    </script>
</body>
</html>
