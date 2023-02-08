@extends('app')

@section('title')
S-See
@endsection

@section('main_content')

<!-- first -->

<div class="d-flex m-5 p-4 text-center ">
    <div class="d-inline border col-6  border border-3">
        <div>
            <img class="w-25" src="https://http2.mlstatic.com/D_NQ_NP_841199-MLM29894980700_042019-W.jpg" alt="www">
            <div>
                <p class=" line_up">Комплекты облачного видеонаблюдения</p>
            </div>
            <div><button type="button" class="btn btn-outline-dark">Купить</button></div>
        </div>
    </div>
    <div class="d-inline border col-6 border border-3">
        <div class="swiper-slide-inner">
            <div>
                <img class="w-25" src="https://www.ami-com.ru/upload/iblock/779/1i12raf51utf6dzxxbs8sb0v829yelaf/437_804_2_.webp" alt="www">
                <p>
                    <a href="https://s-see.ru/product/ip-videokamera-ds-i252w-b-2-8mm/" class="elementor-button elementor-slide-button elementor-size-sm">Свервера Trassir </a>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- second -->

<div class="container text-center p-5 m-2 ">
    <div class="row row-cols-4 ">
        <div class="col p-5 ">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                </svg></p>
            Высокое качество
            Мировые бренды
        </div>
        <div class="col p-5">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-buildings" viewBox="0 0 16 16">
                    <path d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022ZM6 8.694 1 10.36V15h5V8.694ZM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15Z" />
                    <path d="M2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-2 2h1v1H2v-1Zm2 0h1v1H4v-1Zm4-4h1v1H8V9Zm2 0h1v1h-1V9Zm-2 2h1v1H8v-1Zm2 0h1v1h-1v-1Zm2-2h1v1h-1V9Zm0 2h1v1h-1v-1ZM8 7h1v1H8V7Zm2 0h1v1h-1V7Zm2 0h1v1h-1V7ZM8 5h1v1H8V5Zm2 0h1v1h-1V5Zm2 0h1v1h-1V5Zm0-2h1v1h-1V3Z" />
                </svg></p>
            Проектирование
            Монтаж
        </div>
        <div class="col p-5">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                    <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                </svg></p>
            Доставка
            Вся территория РФ и Казахстан
        </div>
        <div class="col p-5">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                    <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                </svg></p>
            Гарантия
            от производителя
        </div>
        <div class="col p-4">
            <p class="pt-3">Камеры
                видеонаблюдения </p>
        </div>
        <div class="col p-4"><a href="#"><img class="w-50" src="https://avatars.mds.yandex.net/i?id=92072d28609b1b0e80c3d642ac8afb6cb02b6086-8318113-images-thumbs&n=13" alt="qqq"></a></div>
        <div class="col p-4">Видеорегистраторы
            Видеосервера</div>
        <div class="col p-4"><a href="#"><img class="w-50" src="https://www.tehnoman.ru/picture_library/items/imgitem69953598726528_input.jpg" alt="qqq"></a></div>
        <div class="col">
            <p class="pt-4">Аксессуары
                видеонаблюдения</p>
        </div>
        <div class="col p-4"><a href="#"><img class="w-50" src="https://sb-light.ru/files/201.jpg" alt="qqq"></a></div>
        <div class="col p-4">Программное обеспечение
            Видеоаналитика </div>
        <div class="col p-4"><a href="#"><img class="w-50" src="https://www.dssl.ru/upload/iblock/ee3/Logotip-TRASSIR_0.png" alt="qqq"></a></div>

    </div>
</div>
@endsection