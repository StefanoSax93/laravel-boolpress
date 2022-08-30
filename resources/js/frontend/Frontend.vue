<template>
    <div>

        <Navbar></Navbar>

        <div class="container">
            <div>
                <h2 class="text-uppercase my-4">Lista post</h2>

                <PostsList></PostsList>
            </div>
        </div>
    </div>

</template>

<script>

import Navbar from './components/Navbar.vue';
import PostsList from './components/PostsList.vue';

export default {
    components: { Navbar, PostsList },
    data() {
        return {

        }
    }
}
</script>