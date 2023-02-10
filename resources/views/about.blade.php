@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
    <div clas='title_about' style='text-align: center'>
    <h2>True Games</h2>
    </div>
        <div class="about d-flex col-12">
            <div class="text col-6">
                <h2 style="padding-top:75px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</h2>
            </div>
            <div class="photo col-6">
                <img src="/public/logo.png" alt="" sizes="" srcset="" >
            </div>
        </div>
        <div class="title_new">
            <h1>Новинки компании</h1>
        </div>
        <div class="slider" style="width:600px;">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="/public/product1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="/public/product2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="/public/product3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="/public/product4.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="/public/product5.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
</div>
@endsection