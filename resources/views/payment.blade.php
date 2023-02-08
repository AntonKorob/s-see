@extends('app')

@section('title')
Оплата
@endsection

@section('main_content')
<div class="container p-3 mb-5">
    <h1>Способы Оплаты</h1>
    <!-- dropdowns_menu -->
    <div class="row-4 mb-5">
        <button class="btn btn-primary m-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1"
            aria-expanded="false" aria-controls="collapseExample">
            Банковская карта
        </button>

        <button class="btn btn-primary m-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2"
            aria-expanded="false" aria-controls="collapseExample3">
            Оплата через СБП (Систему быстрых платежей)
        </button>

        <button class="btn btn-primary m-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3"
            aria-expanded="false" aria-controls="collapseExample3">
            Оплата в кредит или рассрочку
        </button>

        <button class="btn btn-primary m-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample4"
            aria-expanded="false" aria-controls="collapseExample3">
            Оплата балансом
        </button>

    </div>


    <div class="collapse container m-2" id="collapseExample1">
        <div class="card card-body">
            <p>Оплата банковской картой, через Интернет, возможна через системы электронных платежей.

                Номер карты (PAN) должен иметь не менее 15 и не более 19 символов.

                Мы принимаем платежи с сайта по следующим банковским картам</p>
            <p><img class="w-50" src="https://balkonsar.ru/upload/images/sposoby-oplaty/sposoby-oplaty-1.jpg" alt="">
            </p>
        </div>
    </div>
    <div class="collapse container" id="collapseExample2">
        <div class="card card-body m-2">
            <p> Система быстрых платежей (далее "СБП") - сервис платежной системы Банка России, позволяющий физическим
                лицам производить оплату за товар/услуги с помощью любого банка-участника СБП.
                Безопасность переводов обеспечивается на стороне всех банков-участников СБП: банков, Банка России и НСПК
                с использованием современных систем защиты. СБП соответствует всем стандартам информационной
                безопасности.
                Список банков-участников опубликован на официальном сайте</p>
            "https://sbp.nspk.ru/participants/"
        </div>

    </div>
</div>
<div class="collapse container m-2" id="collapseExample3">
    <div class="card card-body">
        <p>
            Выберите понравившиеся товары и положите их в корзину
            Выберите способ оплаты «Рассрочка» или «Кредит»
            Заполните анкету и дождитесь решения банка
            Подпишите кредитный договор по SMS и получите ваш заказ
            Кредитные условия индивидуальны для каждого покупателя. С условиями можно будет ознакомиться в момент
            оформления кредитного договора.
            Кредит доступен на все товары при стоимости корзины от 5000 рублей

            Для оформления кредита необходимо:
            Быть гражданином РФ
            Иметь постоянную регистрацию
            Быть старше 18 лет
            Иметь постоянный доход
        </p>
    </div>
</div>
<div class="collapse container m-2" id="collapseExample4">
    <div class="card card-body">
        <p>
            Возврат денежных средств за возвращенный товар осуществляется на Баланс ЛК для распоряжения покупателем по
            своему усмотрению. Покупатель вправе оплатить денежными средствами последующие покупки или осуществить их
            перевод на реквизиты своего расчётного счета, а также осуществить перевод через СБП. Для осуществления
            возврата покупателю необходимо заполнить форму в разделе «Баланс».

            Баланс ЛК является приоритетным способом оплаты заказов. Вне зависимости от выбранного способа оплаты вся
            стоимость товара будет списана с Баланса ЛК. Если средств на Балансе ЛК недостаточно для полной оплаты
            заказанных товаров, оставшаяся часть стоимость будет списана с Банковской карты покупателя.

        </p>
    </div>
</div>


</div>
@endsection