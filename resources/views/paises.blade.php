<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <h1>paises de la region</h1>
    <table class="table table-bordered table-stripered">
        <thead>
            <tr>
                <th style="color: yellow;">nombre</th>
                <th style="color: rgb(0, 255, 21);">capital</th>
                <th style="color: rgb(25, 0, 255);">moneda</th>
                <th style="color: rgb(255, 0, 128);">poblacion</th>
                <th style="color: rgb(255, 0, 0);">ciudades</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($paises as $pais => $infopais)
            <tr>
                <td rowspan='{{ count($infopais["ciudades"])}}' style="background-color: yellow;">{{$pais}}</td>
                <td rowspan='{{ count($infopais["ciudades"])}}' style="background-color: rgb(0, 255, 21);">{{$infopais["capital"]}}</td>
                <td rowspan='{{ count($infopais["ciudades"])}}' style="background-color: rgb(25, 0, 255);">{{$infopais["moneda"]}}</td>
                <td rowspan='{{ count($infopais["ciudades"])}}' style="background-color: rgb(255, 0, 128);">{{$infopais["población"]}}</td>
                @foreach($infopais["ciudades"] as $ciudad)
                <th  style="background-color: rgb(255, 0, 0);">
                    {{$ciudad}}
                </th>
            </tr>
                @endforeach
            @endforeach
        </tbody>
        <tfoot></tfoot>
    </table>
</body>
</html>