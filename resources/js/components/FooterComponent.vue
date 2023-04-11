<template>
    <footer class="footer">
        <div class="footer__top">
            <div class="footer__top-left">
                <div class="footer__top-column footer__top-column--left">
                    <p class="footer__title">Materials</p>
                    <div class="footer__link-wrapper">
                        <a class="footer__link" href="#">
                            <p class="footer__link-text">
                                Molar ( stab. mammoth tooth )
                            </p>
                            <img
                                class="footer__link-icon"
                                src="/images/icons/arrow.png"
                            />
                        </a>

                        <a class="footer__link" href="#">
                            <p class="footer__link-text">
                                Tusk ( stab. mammoth tusk )
                            </p>
                            <img
                                class="footer__link-icon"
                                src="/images/icons/arrow.png"
                            />
                        </a>
                    </div>
                </div>
            </div>

            <div class="footer__top-right">
                <div class="footer__top-column footer__top-column--right">
                    <p class="footer__title">Socials</p>
                    <div
                        class="footer__link-wrapper footer__link-wrapper--right"
                    >
                        <a
                            class="footer__link-socials"
                            href="https://www.instagram.com/raffir_russia/"
                        >
                            <p class="footer__link-text">Instagram</p>
                            <img
                                class="footer__link-icon"
                                src="/images/icons/arrow.png"
                            />
                        </a>

                        <a
                            class="footer__link-socials"
                            href="https://www.instagram.com/raffir_russia/"
                        >
                            <p class="footer__link-text">Telegram</p>
                            <img
                                class="footer__link-icon"
                                src="/images/icons/arrow.png"
                            />
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer__middle">
            <div class="footer__middle-left">
                <p class="footer__link-text">© 2023 Mammoth Unit</p>
            </div>
            <div class="footer__middle-right">
                <a class="footer__middle-link" href="#">DELIVERY</a>
                <a class="footer__middle-link" href="/sitemap">SITEMAP</a>
            </div>
        </div>
    </footer>
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
