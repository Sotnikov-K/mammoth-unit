<template>
    <header class="header">

        <div class="header__left">

            <nav class="nav">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a class="nav__link" href="/">
                            <img class="logo" src="/images/logo/logo-blue.svg" alt="mammoth-unit logotype">
                        </a>
                    </li>

                    <li class="nav__item">
                        <a class="nav__link nav__link--text-link has-subnav" href="/store">MATERIALS</a>
                        <ul class="subnav">
                            <li><a class="subnav__link" href="/store">Small molar blocks 2cm long</a></li>
                            <li><a class="subnav__link" href="/store">Average molar blocks 5cm long</a></li>
                            <li><a class="subnav__link" href="/store">Big molar blocks ">" 5cm long</a></li>
                        </ul>
                    </li>

                    <!-- <li class="nav__item">
                        <a class="nav__link" href="/processing">Processing</a>
                    </li>

                    <li class="nav__item">
                        <a class="nav__link" href="/contacts">Contacts</a>
                    </li> -->


                    <li class="nav__item">
                        <router-link to="/home">Перейти к home</router-link>
                    </li>
                    <li class="nav__item">
                        <router-link to="/store">Перейти к store</router-link>
                    </li>


                </ul>
            </nav>

            <a class="nav__link1" href="/">
                <img class="logo" src="/images/logo/logo-white2.svg" alt="logo">
            </a>

            <div class="header__burger-btn">
                <span class="header__burger-span header__burger-span-1"></span>
                <span class="header__burger-span header__burger-span-2"></span>
            </div>

        </div>

        <div class="header__right">
            <nav class="nav">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a class="nav__link" href="index.html">
                            <img class="logo" src="/images/language/flag-ru.jpg" style="width: 20px;">
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </header>
</template>

<script>
export default {
    data() {
        return {
            links: [
                {
                    title: "Home",
                    href: "/"
                },
                {
                    title: "Materials",
                    href: "/materials"
                }
            ]
        }
    }
}
</script>