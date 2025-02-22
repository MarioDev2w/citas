@extends('adminlte::page') @section('title', 'Dashboard')
@section('content_header')
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
/>

<div class="pricing-container">
    <!-- Section for Motorbikes -->
    <div class="pricing-section">
        <h2>Motos</h2>
        <div class="pricing-grid">
            <div class="pricing-item">
                <div class="icon-container">
                    
                </div>
                <h3>RTM Moto 2022 al 2024</h3>
                <p class="price">$210,505.00</p>
                <a href="/Agenda" class="btn">Agendar</a>
            </div>
            <div class="pricing-item">
                <div class="icon-container">
                 
                </div>

                <h3>RTM Moto 2007 hacia atrás</h3>
                <p class="price">$210,805.00</p>
                <a href="/Agenda" class="btn">Agendar</a>
            </div>
            <div class="pricing-item">
                <div class="icon-container">
               
                </div>
                <h3>RTM Moto 2008 al 2016</h3>
                <p class="price">$211,005.00</p>
                <a href="/Agenda" class="btn">Agendar</a>
            </div>
            <div class="pricing-item">
                <div class="icon-container">
                  
                </div>
                <h3>RTM Moto 2017 al 2021</h3>
                <p class="price">$210,805.00</p>
                <a href="/Agenda" class="btn">Agendar</a>
            </div>
        </div>
    </div>

    <!-- Section for Light Vehicles -->
    <div class="pricing-section">
        <h2>Livianos Particulares</h2>
        <div class="pricing-grid">
            <div class="pricing-item">
               
                <h3>RTM Carro Particular 2007 hacia atrás</h3>
                <p class="price">$321,508.00</p>
                <a href="/Agenda" class="btn">Agendar</a>
            </div>
            <div class="pricing-item">
            
                <h3>RTM Carro Particular 2008 al 2016</h3>
                <p class="price">$321,908.00</p>
                <a href="/Agenda" class="btn">Agendar</a>
            </div>
            <div class="pricing-item">
            
                <h3>RTM Carro Particular 2017 al 2021</h3>
                <p class="price">$321,508.00</p>
                <a href="/Agenda" class="btn">Agendar</a>
            </div>
            <div class="pricing-item">
            
                <h3>RTM Carro Particular 2022 al 2024</h3>
                <p class="price">$321,208.00</p>
                <a href="/Agenda" class="btn">Agendar</a>
            </div>
        </div>
    </div>
</div>

<img src="img/images.jpg" alt="">

<style>
   body {
    font-family: "Arial", sans-serif;
    background-color: #F7EAE8;
}

.pricing-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
}

.pricing-section {
    max-width: 1200px;
    margin-bottom: 100px;
    width: 100%;
}

h2 {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
    color: #000000 ;
}

.pricing-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
}

.pricing-item {
    background-color: #F7EAE8;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    transition: box-shadow 0.3s ease;
    position: relative;
}

.pricing-item:hover {
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
}

.pricing-item h3 {
    font-size: 18px;
    margin-bottom: 20px;
    color: #000000 ;
}

.price {
    font-size: 24px;
    font-weight: bold;
    margin-top: 40px; /* Adjust as needed to ensure it aligns well with the icon */
    color: #e39507;
}

.btn {
    display: inline-block;
    background-color:#080808  ;
    color: #fff;
    padding: 10px 40px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    margin-top: 20px;
}

.btn:hover {
    background-color: #e39507;
}

.icon-container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
    margin-top: 20px; /* Adjust this to move the icon vertically between the title and price */
}

.custom-icon {
    width: 50px; /* Adjust the size if needed */
    height: auto;
}

</style>

@stop @section('content') @stop @section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css" /> --}} @stop
@section('js')
<script>
    console.log("Hi, I'm using the Laravel-AdminLTE package!");
</script>
@stop
