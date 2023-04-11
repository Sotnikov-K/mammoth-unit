<template>
    <div class="wrapper">
        <div class="sample">
            <form>
                <div v-bind="elem" @scroll="onScroll">
                    <p>This text no one reads. This text no one reads. This text no one reads.</p>
                    <p>This text no one reads. This text no one reads. This text no one reads.</p>
                    <p>This text no one reads. This text no one reads. This text no one reads.</p>
                    <p>This text no one reads. This text no one reads. This text no one reads.</p>
                    <p>This text no one reads. This text no one reads. This text no one reads.</p>
                    <p>This text no one reads. This text no one reads. This text no one reads.</p>
                    <p>This text no one reads. This text no one reads. This text no one reads.</p>
                    <p>This text no one reads. This text no one reads. This text no one reads.</p>
                    <p>This text no one reads. This text no one reads. This text no one reads.</p>
                    <p>This text no one reads. This text no one reads. This text no one reads.</p>
                    <p>This text no one reads. This text no one reads. This text no one reads.</p>
                    <p>This text no one reads. This text no one reads. This text no one reads.</p>
                    <p>This text no one reads. This text no one reads. This text no one reads.</p>
                    <p>This text no one reads. This text no one reads. This text no one reads.</p>
                    <p>This text no one reads. This text no one reads. This text no one reads.</p>
                    <p>This text no one reads. This text no one reads. This text no one reads.</p>
                    <p>This text no one reads. This text no one reads. This text no one reads.</p>
                    <p>This text no one reads. This text no one reads. This text no one reads.</p>
                    <p>This text no one reads. This text no one reads. This text no one reads.</p>
                    <p>This text no one reads. This text no one reads. This text no one reads.</p>
                </div>



                <div class="form-div" v-show="scrolled">

                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" v-model="agreeall">
                            Agree all
                        </label>
                    </div>

                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" v-model="getSpam">
                            Get spam
                        </label>
                    </div>




                    <div v-show="getSpam">
                        <div class="form-check">
                            <label class="form-check-label">Email
                                <input class="form-check-input" name="contact" type="radio" value="Email"
                                    v-model="checkedConnection">
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">Phone
                                <input class="form-check-input" name="contact" type="radio" value="Phone"
                                    v-model="checkedConnection">
                            </label>
                        </div>
                    </div>


                    <hr>
                    <button v-bind:disabled="!agreeall" @click.prevent="openTable" class="btn btn-primary">
                        Send Data
                    </button>

                </div>
            </form>

            <div v-show="openTableStatus">
                <table class="table table-bordered">
                    <tr>
                        <td>Agree all</td>
                        <td>{{ agreeall }}</td>
                    </tr>

                    <tr>
                        <td>Get spam</td>
                        <td class="bar" :="spam">{{ tableBarText }}</td>
                    </tr>

                    <tr v-show="getSpam">
                        <td>Spam type</td>
                        <td>{{ checkedConnection }}</td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
</template>

<script>


export default {
    data() {
        return {
            elem: {
                id: "list",
                class: 'content alert alert-info',
            },

            spam: {
                class: ""
            },

            scrolled: false,
            agreeall: false,
            openTableStatus: false,
            getSpam: false,
            checkedConnection: "Email",

            tableBar: {
                true: "YES",
                false: "NO",
            },

            tableBarText: "",
        }
    },
    computed: {
    },

    watch: {
        getSpam() {
            if (this.getSpam == false) {
                this.tableBarText = this.tableBar.false;
                this.spam.class = "bar-no";

            } else {
                this.tableBarText = this.tableBar.true;
                this.spam.class = "bar-yes";
            }
        }
    },

    methods: {
        onScroll(e) {
            if (e.target.scrollHeight - e.target.clientHeight == e.target.scrollTop) {
                this.scrolled = true;
            }
        },

        openTable() {
            this.openTableStatus = true;
        },

        agreeBar() {
            if (this.agreeall == true) {
                this.confirmCurrent = "yes";
            } else this.confirmCurrent = "no";
        }
    },
}
</script>