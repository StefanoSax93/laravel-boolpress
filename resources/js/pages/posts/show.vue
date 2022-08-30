<template>
    <div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center my-4">
                        <h1 class="text-uppercase">{{  post.title  }}</h1>
                        <a href="/" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-activity">
                                <line x1="20" y1="12" x2="4" y2="12"></line>
                                <polyline points="10 18 4 12 10 6"></polyline>
                            </svg> Tutti i posts
                        </a>
                    </div>

                    <div class="row mb-3">
                        <div class="col-7">
                            <img :src="post.cover_img" alt="" class="img-fluid rounded">
                        </div>
                        <div class="col">
                            <dl>
                                <dt>Titolo</dt>
                                <dd>{{  post.title  }}</dd>
                                <dt>Slug</dt>
                                <dd>{{  post.slug  }}</dd>
                                <dt>Contenuto</dt>
                                <dd>{{  post.content  }}</dd>

                                <dt>Autore</dt>
                                <dd>{{  post.user.name  }}</dd>
                                <dt>Categoria</dt>
                                <dd v-if="post.category">{{  post.category.name  }}</dd>
                                <dt v-if="post.tags.length > 0">Tags</dt>
                                <dd>
                                    <ul>
                                        <li v-for="tag in post.tags" :key="tag.id">{{  tag.name  }}</li>
                                    </ul>
                                </dd>
                            </dl>
                        </div>
                    </div>  
                </div> 
            </div> 
        </div>
    </div>                                
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            post: []
        }
    },
    mounted() {

        axios.get("/api/posts/" + this.$route.params.slug)
            .then((resp) => {
                this.post = resp.data
            })
    }
}
</script>