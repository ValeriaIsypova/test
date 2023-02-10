@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="title_contact">
            <h1 style=>Где нас найти?</h1>
        </div>
        <div class='info d-flex'>
            <div class="map">
                <img src="/public/map.jpg" alt="" srcset="">
            </div>
            <div class="contacts">
                <h2>Адрес: Северо-восточная/21</h2>
                <h2>Номер телефона: 8(923)648-14-12</h2>
                <h2>email: shop@mail.ru</h2>
                <div class='logoimg'>
                <img class='logoinfo' src="/public/logo.png" alt="" srcset="" >
                </div>
            </div>
        </div>
    </div>
</div>

@endsection