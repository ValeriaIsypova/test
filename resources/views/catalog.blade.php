@extends('layouts.app')

@section('content')
<div class='container'>
    <div class='row'>
        <div class='title_catalog'>
            <h2>Каталог товаров</h2>
        </div>
        <div class='product_1 col-12 d-flex'>
            <div class='card_1 col-3'>
                <img src="/public/product1.png" alt="" sizes="" srcset="" style="width:300px">
                <h2>Dual Charging Dock</h2>
                <h2>100$</h2>
            </div>
            <div class='card_1 col-3'>
                <img src="/public/product2.jpg" alt="" sizes="" srcset="" style="width:300px">
                <h2>SonyPS</h2>
                <h2>100$</h2>
            </div>
            <div class='card_1 col-3'>
                <img src="/public/product3.jpg" alt="" sizes="" srcset="" style="width:300px">
                <h2>SonyPS</h2>
                <h2>100$</h2>
            </div>
            <div class='card_1 col-3'>
                <img src="/public/product4.png" alt="" sizes="" srcset="" style="width:300px">
                <h2>Dual Charging Dock</h2>
                <h2>100$</h2>
            </div>
        </div>
    </div>
</div>
@endsection