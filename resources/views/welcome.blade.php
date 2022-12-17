<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body class="antialiased">

        <script src="//{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script>
        <script src="{{ url('js/app.js') }}"></script>
        <script>
            Echo.channel('notify')
                .listen('.newnotify', (e) => {
                    console.log(e)
                    alert("Oops");
                });
        </script>
    </body>
</html>
