<template>
    <input type="text" v-model.trim.lazy="promo">

    {{ price }}

    <transition name="fade">
        <div v-if="hasSale">
            <div class="alert">- {{ sale }}%</div>
            {{ total }}
        </div>
    </transition>
</template>

<script>
export default {
    data() {
        return {
            promo: "",
            price: '1000',
            sale: 0,
        }
    },
    computed: {
        hasSale() {
            return this.sale > 0;
        },

        total() {
            return this.price * (1 - this.sale / 100);
        }

    },

    watch: {
        promo() {
            this.getSale(this.promo, sale => {
                this.sale = sale;
            });
        },
    },




    methods: {
        getSale(promo, fn) {
            setTimeout(() => {

                let codes = {
                    S: 10,
                    L: 20,
                };

                let sale = codes.hasOwnProperty(promo) ? this.promo = codes[promo] : 0;
                fn(sale);
            }, 2500);
        }

    }


}


</script>