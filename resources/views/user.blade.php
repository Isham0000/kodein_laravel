<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ini Adalah Halaman Manage User Dari Views!</h1>
    <h3><a href="{{ route('frontend_product', 100) }}">Detail product 100</a></h3>
    <h3><a href="{{ route('frontend_product', 200) }}">Detail product 200</a></h3>
    <h3><a href="{{ route('frontend_product', 300) }}">Detail product 300</a></h3>
    <a href="{{ url()->previous() }}">Kembali</a>
</body>
</html>