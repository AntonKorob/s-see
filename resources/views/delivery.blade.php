@extends('app')

@section('title')
Доставка
@endsection

@section('main_content')
<div class="conteiner text-center  ">
    <h1 >Доставка</h1>
   
        <div class="delivery-banner-content">
            <h2 class="delivery-banner-title">Быстро доставим любой Ваш заказ по&nbsp;всей России</h2>

            <div class="delivery-banner-advantage">
                <div class="advantage-item advantage-item-free">Бесплатная доставка</div>

                <div class="advantage-item advantage-item-time">Доставка круглый год по всей России</div>

                <div class="advantage-item advantage-item-return">Возврат товара при примерке</div>
            </div>
            <a class="delivery-banner-btn j-terms-delivery" href="/services/besplatnaya-dostavka#terms-delivery">Узнать условия</a>
        </div>
        <img class="delivery-banner-img w-25" src="https://marketperm.ru/image/catalog/category/dostavka.jpg">
    
</div>
@endsection