<template>
    <div>

        <Navbar></Navbar>

        <div class="container"> 
            <router-view></router-view>        
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