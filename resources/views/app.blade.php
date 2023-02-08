<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <title>@yield('title')</title>
</head>

<body>

    <!-- navigation -->
    <div class="sticky-top" style="background-color: #b4b4b4;">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/home" class="nav-link px-2 link-secondary">Главная</a></li>
                <li><a href="/delivery" class="nav-link px-2 link-dark">Доставка</a></li>
                <li><a href="/payment" class="nav-link px-2 link-dark">Оплата</a></li>
                <li><a href="/guarantee" class="nav-link px-2 link-dark">Гарантия</a></li>
                <li><a href="/contacts" class="nav-link px-2 link-dark">Контакты</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-primary me-2"><a href="/login">Войти</a></button>
                <button type="button" class="btn btn-outline-primary me-4"><a href="/registration">Регистрация</a></button>
            </div>
    </div>
    </header>

    <!-- navigation_2 -->
    <nav class="navbar navbar-expand-lg ">

        <div class="">
            <a href="https://s-see.ru/wp-content/uploads/2021/11/logo.png">
                <img class="w-50" src="https://s-see.ru/wp-content/uploads/2021/11/logo.png" title="logo" alt="logo"> </a>
        </div>

        <div class="">
            <h3>8-906-955-13-13</h3>
            <h3>info@s-see.ru</h3>
        </div>

        <div class="m-2">
            <button type="button " class="btn btn-outline-primary m-2 ">
                <div class="elementor-button-wrapper">
                    <a href="https://wa.me/79069951313" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                        <span class="elementor-button-content-wrapper">
                            <span class="elementor-button-text">Написать WhatsApp</span>
                        </span>
                    </a>

                </div>
            </button>
            <div class="elementor-button-wrapper">
                <button type="button" class="btn btn-outline-primary m-2">
                    <a href="https://s-see.ru/kommercheskoe-predlozhenie/" class="elementor-button-link elementor-button elementor-size-md" role="button">
                        <span class="elementor-button-content-wrapper">
                            <span class="elementor-button-text">Запрос КП</span>
                        </span>
                    </a>
                </button>
            </div>
        </div>

        <div class="elementor-widget-container">
            <h3><span style="color: var(--ast-global-color-2); font-size: 1.66667rem; font-style: inherit; font-weight: inherit; font-family: var( --e-global-typography-text-font-family ), Sans-serif; background-color: var(--ast-global-color-5);">пн-пт 10.00-19.00</span></h3>
            <h3>суб 10.00-16.00</h3>
        </div>

        </div>
    </nav>
    </div>
    <div class="conteiner">
    </div>

    <!-- search -->

    <div class="d-flex  m-5 w-70">

        <div class="input-group flex-nowrap w-50 float-md-start">
            <input type="text" class="form-control border border-3" placeholder="Искать">

            <button type="button" class="border border-3">
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="16" fill="currentColor" class="bi bi-binoculars" viewBox="0 0 16 16">
                        <path d="M3 2.5A1.5 1.5 0 0 1 4.5 1h1A1.5 1.5 0 0 1 7 2.5V5h2V2.5A1.5 1.5 0 0 1 10.5 1h1A1.5 1.5 0 0 1 13 2.5v2.382a.5.5 0 0 0 .276.447l.895.447A1.5 1.5 0 0 1 15 7.118V14.5a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 14.5v-3a.5.5 0 0 1 .146-.354l.854-.853V9.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v.793l.854.853A.5.5 0 0 1 7 11.5v3A1.5 1.5 0 0 1 5.5 16h-3A1.5 1.5 0 0 1 1 14.5V7.118a1.5 1.5 0 0 1 .83-1.342l.894-.447A.5.5 0 0 0 3 4.882V2.5zM4.5 2a.5.5 0 0 0-.5.5V3h2v-.5a.5.5 0 0 0-.5-.5h-1zM6 4H4v.882a1.5 1.5 0 0 1-.83 1.342l-.894.447A.5.5 0 0 0 2 7.118V13h4v-1.293l-.854-.853A.5.5 0 0 1 5 10.5v-1A1.5 1.5 0 0 1 6.5 8h3A1.5 1.5 0 0 1 11 9.5v1a.5.5 0 0 1-.146.354l-.854.853V13h4V7.118a.5.5 0 0 0-.276-.447l-.895-.447A1.5 1.5 0 0 1 12 4.882V4h-2v1.5a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V4zm4-1h2v-.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5V3zm4 11h-4v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V14zm-8 0H2v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V14z" />
                    </svg></a>
            </button>
        </div>
        <div>
            <div class="float-end ms-5 col ">
                <button type="button" class="btn  position-relative border border-3 ">

                    <span>0.00 ₽</span>

                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
                        </svg></a>
                    <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2"><span class="visually-hidden">unread messages</span></span>
                </button>
            </div>
        </div>

    </div>

    <!-- main_content -->

    <div class="conteiner">
        @yield('main_content')
    </div>

    </div>

    <footer class="p-5 bg-secondary text-white d-inline-flex ">

        <p class="text-start m-2 p-3">Все права защищены. 2022. © s-see</p>
        <p class="text-center m-2 p-3 w-50">Проектирование систем видеонаблюдение Монтаж систем видеонаблюдение Продажа оборудование для видеонаблюдения</p>
        <div>
            <p class="text-end m-2">8-906-995-13-13</p>
            <p class="text-end m-2">info@s-see.ru</p>
        </div>

    </footer>

</body>

</html>