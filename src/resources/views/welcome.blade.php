<!DOCTYPE html>
<html>
    <head>
        <title v-text="name"></title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            p {
                font-size: 25px;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="content">
                <div class="title" v-text="name"></div>
                <p v-text="message"></p>
            </div>
        </div>
    </body>

    <script type="text/javascript" src="{{asset('assets/js/main.min.js')}}"></script>
</html>
