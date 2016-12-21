<html>
    <head>
        <meta charset="utf-8">
        <title>产品研发部</title>
        <script>
            window.Laravel = <?php echo json_encode([
                    'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body>
    <form action="/projectUpImg" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="file" name="uu">

        <input type="submit" name="sub">
    </form>
    </body>
</html>