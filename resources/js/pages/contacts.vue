<template>
    <div class="container">
        <h1 class="text-uppercase my-3">Pagina Contatti</h1>

        <form @submit.prevent="onFormSubmit">
            <div class="mb-3">
                <label class="form-label text-uppercase">nome</label>
                <input type="text" placeholder="Inserisci il nome" class="form-control" v-model="name">
            </div>

            <div class="mb-3">
                <label class="form-label text-uppercase">messaggio</label>
                <textarea cols="30" rows="10" placeholder="Inserisci un messaggio" class="form-control" v-model="message"></textarea>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-outline-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-activity">
                        <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                        <polyline points="17 21 17 13 7 13 7 21"></polyline>
                        <polyline points="7 3 7 8 15 8"></polyline>
                    </svg> Invia
                </button>
            </div>

        </form>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            name: "",
            message: ""
        }
    },
    methods: {
        onFormSubmit() {
            axios.post("/api/contacts", {
                name: this.name,
                message: this.message
            })
        }
    }
}
</script>