@extends('adminlte::page') @section('title', 'Dashboard')
@section('content_header')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarifas SOAT 2024</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="header-content">
                <h1>Tarifas SOAT <span class="highlight">2024</span></h1>
                <p class="subheader">Tarifa única</p>
                <p class="date">Tarifa vigente desde el 10 de enero de 2024</p>
            </div>
        </header>

        <main>
            <table>
                <thead>
                    <tr>
                        <th>Código Tarifas</th>
                        <th>Descripción</th>
                        <th>Valor prima</th>
                        <th>Contribución ADRES 50%</th>
                        <th>Tasa RUNT</th>
                        <th>Total a pagar</th>
                    </tr>
                </thead>
                
                <tbody>
                    
                    <tr>
                        <td>100</td>
                        <td>Ciclomotor</td>
                        <td>72.100</td>
                        <td>37.400</td>
                        <td>2.100</td>
                        <td class="highlight-cell">111.600</td>
                    </tr>

                    <tr>
                        <td>110</td>
                        <td>Menos de 100 CC</td>
                        <td>150.100</td>
                        <td>78.000</td>
                        <td>2.100</td>
                        <td class="highlight-cell">230.200</td>
                    </tr>

                    <tr>
                        <td>120</td>
                        <td>Entre 100-200 CC</td>
                        <td>201.600</td>
                        <td>104.800</td>
                        <td>2.100</td>
                        <td class="highlight-cell">308.500</td>
                    </tr>
                    <tr>
                        <td>130</td>
                        <td>Más de 200 CC</td>
                        <td>544.800</td>
                        <td>283.200</td>
                        <td>2.100</td>
                        <td class="highlight-cell">830.100</td>
                    </tr>
                    <tr>
                        <td>140</td>
                        <td>Motocarro</td>
                        <td>227.400</td>
                        <td>118.200</td>
                        <td>2.100</td>
                        <td class="highlight-cell">347.700</td>
                    </tr>
                 

                    <H2>Motos</H2>
                    <!-- Agrega más filas según sea necesario -->
                </tbody>

                
            </table>

            <table>
                <thead>
                    <tr>
                        <th>Código Tarifas</th>
                        <th>Descripción</th>
                        <th>Valor prima</th>
                        <th>Contribución ADRES 50%</th>
                        <th>Tasa RUNT</th>
                        <th>Total a pagar</th>
                    </tr>
                </thead>
                
                <tbody>
                    
                    <tr>
                        <td>211</td>
                        <td>Menos de 1500 cc hasta 9 años</td>
                        <td>567.400</td>
                        <td>295.00</td>
                        <td>2.100</td>
                        <td class="highlight-cell">864.500</td>
                    </tr>

                    <tr>
                        <td>221</td>
                        <td>Entre 1500 y 2500 CC hasta 9 años</td>
                        <td>667.800</td>
                        <td>352.400</td>
                        <td>2.100</td>
                        <td class="highlight-cell">1.032.300</td>
                    </tr>

                    <tr>
                        <td>231</td>
                        <td>Más de 2500 CC hasta 9 años</td>
                        <td>795.300</td>
                        <td>413.500</td>
                        <td>2.100</td>
                        <td class="highlight-cell">1.210.900</td>
                    </tr>
                    <tr>
                        <td>212</td>
                        <td>Menos de 1500 cc 10 añós o más</td>
                        <td>682.400</td>
                        <td>354.800</td>
                        <td>2.100</td>
                        <td class="highlight-cell">1.039.300</td>
                    </tr>
                    <tr>
                        <td>222</td>
                        <td>Entre 1500 y 2500 cc 10 años o más</td>
                        <td>803.200</td>
                        <td>417.600</td>
                        <td>2.100</td>
                        <td class="highlight-cell">1.222.900</td>
                    </tr>

                    <tr>
                        <td>232</td>
                        <td>Más de 2500 cc 10 años o más</td>
                        <td>602.500</td>
                        <td>474.600</td>
                        <td>2.100</td>
                        <td class="highlight-cell">1.389.500</td>
                    </tr>
                 

                    <H2>Camperos y Camionetas</H2>
                    
                </tbody>

                
            </table>
             <table>
                <thead>
                    <tr>
                        <th>Código Tarifas</th>
                        <th>Descripción</th>
                        <th>Valor prima</th>
                        <th>Contribución ADRES 50%</th>
                        <th>Tasa RUNT</th>
                        <th>Total a pagar</th>
                    </tr>
                </thead>
                
                <tbody>
                    
                    <tr>
                        <td>310</td>
                        <td>Menos de 5 toneladas</td>
                        <td>636.000</td>
                        <td>330.700</td>
                        <td>2.100</td>
                        <td class="highlight-cell">968.800</td>
                    </tr>

                    <tr>
                        <td>320</td>
                        <td>Entre 5 y 15 toneladas</td>
                        <td>919.00</td>
                        <td>477.800</td>
                        <td>2.100</td>
                        <td class="highlight-cell">1.398.900</td>
                    </tr>

                    <tr>
                        <td>330</td>
                        <td>Más de 15 toneladas</td>
                        <td>1.162.400</td>
                        <td>604.400</td>
                        <td>2.100</td>
                        <td class="highlight-cell">1.768.900</td>
                    </tr>
                   
               

                    
                 

                    <H2>Vehículos de carga o mixtos</H2>
                    
                </tbody>

                
            </table>
            <table>
                <thead>
                    <tr>
                        <th>Código Tarifas</th>
                        <th>Descripción</th>
                        <th>Valor prima</th>
                        <th>Contribución ADRES 50%</th>
                        <th>Tasa RUNT</th>
                        <th>Total a pagar</th>
                    </tr>
                </thead>
                
                <tbody>
                    
                    <tr>
                        <td>410</td>
                        <td>Menos de 1500 cc</td>
                        <td>715.800</td>
                        <td>372.200</td>
                        <td>2.100</td>
                        <td class="highlight-cell">1.090.100</td>
                    </tr>

                    <tr>
                        <td>420</td>
                        <td>Entre 1500 y 2500 CC</td>
                        <td>902.800</td>
                        <td>469.400</td>
                        <td>2.100</td>
                        <td class="highlight-cell">1.374.300</td>
                    </tr>

                    <tr>
                        <td>430</td>
                        <td>Más de 2500 CC</td>
                        <td>1.082.600</td>
                        <td>562.900</td>
                        <td>2.100</td>
                        <td class="highlight-cell">1.647.600</td>
                    </tr>
                   
               

                    
                 

                    <H2>Vehículos oficiales-espciales</H2>
                    
                </tbody>

                
            </table>
            <p class="note">*El valor del Runt podrá variar por disposición del Ministerio de Transporte, modificando el valor del seguro.</p>
        </main>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600;700&display=swap');

body {
    font-family: 'IBM Plex Sans', sans-serif;
    background-color: #F4F4F4;
    color: #333;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 1000px;
    margin: 0 auto;
    padding: 20px;
    background-color: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

header {
    text-align: center;
    margin-bottom: 20px;
}

.header-content h1 {
    font-size: 36px;
    color: #5A2C82; /* Color similar al de la imagen */
}

.header-content .highlight {
    color: #F1508E; /* Color rosado */
}

.subheader {
    font-size: 24px;
    color: #73A83E; /* Verde similar al de la imagen */
}

.date {
    font-size: 16px;
    color: #666;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

thead th {
    background-color: #5A2C82;
    color: white;
    padding: 10px;
    font-weight: 600;
    text-align: left;
}

tbody td {
    padding: 10px;
    border-bottom: 1px solid #DDD;
    font-size: 14px;
}

.highlight-cell {
    background-color: #D8EAD3; /* Verde claro para resaltar */
    font-weight: 600;
    color: #3E8038; /* Verde para el texto */
}

.note {
    font-size: 12px;
    color: #777;
    text-align: center;
}

    </style>
</body>
</html>





@stop @section('content') @stop @section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css" /> --}} @stop
@section('js')
<script>
    console.log("Hi, I'm using the Laravel-AdminLTE package!");
</script>
@stop
