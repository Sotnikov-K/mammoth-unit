@extends('layouts.app')

@section('content')




<main class="page">

    <v-input></v-input>

    <section class="caption">
        <article class="caption__item caption__item--left">
            <div class="caption__data">   
                {{-- <img class="caption__image" src="" loading="lazy" alt="Композиты Раффир"> --}}
                <div class="caption__title">
                    <h1 class="caption__title-h1">Композиты Раффир</h1>
                    <p class="caption__title-p1">Раффир Нобл - Желтая бронза</p>
                    <p class="caption__title-p2">Нож Станислава Стругунова</p>
                </div>
                <a href="#" class="link link--offer">
                    <p class="link__text">Смотреть</p>
                    <img class="link__icon" src="">
                </a>
            </div>
        </article>
        <article class="caption__item caption__item--right">
            <div class="caption__data">
                {{-- <img class="caption__image" src="" loading="lazy" alt="Информация"> --}}
                <div class="caption__title">
                    <h2 class="caption__title-h1">Информация</h2>
                    <p class="caption__title-p1">по работе с материалом</p>
                    <p class="caption__title-p2">Обработка, шлифовка, полировка</p>
                </div>
                <a href="#" class="link link--offer">
                    <p class="link__text">Подробнее</p>
                    <img class="link__icon" src="">
                </a>
            </div>
        </article>
    </section>

    <v-insertname></v-insertname>

    


</main>



@endsection