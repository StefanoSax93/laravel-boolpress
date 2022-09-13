<template>
    <div class="bg-dark">
        <div class="container">
            <h1 class="text-center text-uppercase py-3 text-white">Lista post</h1>

            <PostsList></PostsList>
        </div>
    </div>
</template>

<script>
import PostsList from '../../frontend/components/PostsList.vue';
export default {
    components: { PostsList }
}
</script> 