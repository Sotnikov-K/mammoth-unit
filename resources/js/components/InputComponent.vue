<template>
    <div style="margin: 50px auto; width: 50%; display: flex; flex-direction: column;">

        <label for="email">email</label>
        <input type="text" v-model="email">

        <label for="name">name</label>
        <input type="text" v-model="name">

        <label for="surname">surname</label>
        <input type="text" v-model="surname">

        <label for="phone">phone number</label>
        <input type="text" v-model="phone" ref="firstInput">

        <button style="margin-top: 20px;" @click="addGuest">+ add a guest</button>

        <input v-for="item in items" v-model="item.name">

        <button :disabled="!emptyFieldsCheck" @click="changeResult">send data</button>

        <div class="result-list" style="margin-top: 50px;" v-show="result">
            <p>your email</p>
            <p>{{ email }}</p>

            <p>your name</p>
            <p>{{ name }}</p>

            <p>your surname</p>
            <p>{{ surname }}</p>

            <p>your phone</p>
            <p>{{ phone }}</p>

            <li v-for="item in items">
                {{ item.name }}
            </li>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            email: "",
            name: "",
            surname: "",
            phone: "",
            emptyFieldsCheck: false,
            result: false,
            filed: false,

            items: [],
        }
    },
    computed: {
        emptyFieldsCheck() {
            return (this.email.length > 0 && this.name.length > 0 && this.surname.length > 0 && this.phone.length > 0);
        },

    },

    methods: {
        addGuest() {
            this.items.push({ name: '' });
        },

        changeResult() {
            this.result = true;
        }
    },

    mounted() {
        this.$refs.firstInput.focus();
    },
}
</script>