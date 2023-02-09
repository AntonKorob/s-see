@extends('app')

@section('title')
Contacts
@endsection

@section('main_content')

<!-- form-contact -->

<div class="conteiner text-center p-3 ms-5 w-75">
    <h1>Контакты</h1>

    
    <form action="/contacts" method="post">
        @csrf
        <div class="form-group p-3 mt-4">
            <label for="name">Введите имя : </label>
            <input class="form-control border border-info-subtle " type="text" name="name" id="name"
                placeholder="Введите имя">
        </div>
        <div class="form-group p-3">
            <label for="email">Введите email</label>
            <input class="form-control border border-info-subtle" type="email" name="email" id="email"
                placeholder="Введите email">
        </div>
        <div class="form-group p-3">
            <label for="subject">Тема сообщения</label>
            <input class="form-control border border-info-subtle" type="subject" name="subject" id="subject"
                placeholder="Тема сообщения">
        </div>
        <div class="form-group p-3">
            <label for="message">Введите сообщение</label>
            <textarea class="form-control border border-info-subtle " cols="20" rows="5" name="message" id="message"
                placeholder="Введите сообщение"></textarea>

        </div>
        <button class="btn btn-success m-4 " type="submit">Отправить</button>

    </form>

    <img class="w-25" src="https://eastauto.in/img/product6.jpg" alt="qqq">
    <div>
        <button class="text-center p-4 m-4 rounded">
            <a href="https://2gis.ru/novosibirsk/firm/70000001059679988">Показать на карте</a>
        </button>
    </div>

</div>


@endsection