<template>
    <header class="header">
        <div class="header__left">
            <nav class="nav">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a class="nav__link" href="/">
                            <img
                                class="logo"
                                src="/images/logo/logo-blue.svg"
                                alt="mammoth-unit logotype"
                            />
                        </a>
                    </li>

                    <li class="nav__item">
                        <a
                            class="nav__link nav__link--text-link has-subnav"
                            href="/store"
                            >MATERIALS</a
                        >
                        <ul class="subnav">
                            <li>
                                <a class="subnav__link" href="/store"
                                    >Bolster<br />
                                    molar blocks
                                    <span class="subnav__link-span"
                                        >S
                                        <span class="subnav__link-span-2"
                                            >up to 2cm
                                        </span>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a class="subnav__link" href="/store"
                                    >Spacer<br />
                                    molar blocks
                                    <span class="subnav__link-span"
                                        >M
                                        <span class="subnav__link-span-2"
                                            >up to 6cm
                                        </span>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a class="subnav__link" href="/store"
                                    >Full handle<br />
                                    molar blocks
                                    <span class="subnav__link-span"
                                        >L
                                        <span class="subnav__link-span-2"
                                            >more then 6cm
                                        </span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav__item">
                        <a
                            class="nav__link nav__link--text-link-round"
                            href="/contacts"
                            >INFO</a
                        >
                    </li>
                </ul>
            </nav>

            <!-- <a class="nav__link1" href="/">
                <img class="logo" src="/images/logo/logo-white2.svg" alt="logo">
            </a> -->

            <!-- <div class="header__burger-btn">
                <span class="header__burger-span header__burger-span-1"></span>
                <span class="header__burger-span header__burger-span-2"></span>
            </div> -->
        </div>

        <div class="header__right">
            <nav class="nav">
                <ul class="nav__list">
                    <!-- <li class="nav__item">
                        <a class="nav__link" href="index.html">
                            <img class="logo" src="/images/language/flag-ru.jpg" style="width: 20px;">
                        </a>
                    </li> -->

                    <li class="nav__item">
                        <a
                            class="nav__link nav__link--text-link-round nav__link--shoppingcart"
                            href="/CART"
                            >SHOPPING CART<span> [0]</span></a
                        >
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
                    href: "/",
                },
                {
                    title: "Materials",
                    href: "/materials",
                },
            ],
        };
    },
};
</script>
