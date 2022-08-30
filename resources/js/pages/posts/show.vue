<template>
    <div>
        <h2 class="text-uppercase my-4">{{  post.title  }}</h2>
        <h3><strong>AUTORE: </strong> {{  post.user.name  }}</strong></h3>

        <img :src="post.cover_img" alt="" style="width: 300px">
        <p class="my-3"><strong class="text-uppercase">descrizione:</strong> {{post.content}}</p>

        <div v-if="post.category" class="mb-3">
            <h4 class="text-uppercase">Categoria</h4>
            {{  post.category.name  }}
        </div>
        <div v-if="post.tags.length > 0">
            <h4 class="text-uppercase">Tags</h4>
            <ul>
                <li v-for="tag in post.tags" :key="tag.id">{{  tag.name  }}</li>
            </ul>
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
                this.post  = resp.data
            })
    }
}
</script>