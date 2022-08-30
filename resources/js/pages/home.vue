<template>
    <div>
        <h1 class="text-uppercase my-3">Home Page</h1>


        <h2>Lista post</h2>

        <PostsList></PostsList>
    </div>
</template>

<script>
import PostsList from '../frontend/components/PostsList.vue';
export default {
    components: { PostsList }
}
</script> 