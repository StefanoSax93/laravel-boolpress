<template>
    <div class="home">
        <img src="images/jumbotron.jpg" class="mw-100" alt="">
        <div class="overlay"></div>
        <div class="home-title">
            <div class="d-flex flex-column align-items-center rounded p-4">
                <h1 class="text-uppercase my-3">Benvenuto nella Home Page</h1>
                <router-link :to="{ name: 'posts.index' }"
                    class="my-btn my-3 text-uppercase">
                    visualizza posts
                </router-link>
            </div>
        </div>
    </div>
</template>

<script>

export default {

}
</script> 

<style lang="scss">
.home {
    
    position: relative;
    overflow: hidden;
    max-height: 92.2vh;

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: rgba(0,0,0,.5)
    }
    
    .home-title {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;

    .my-btn {
        background-color: orange;
        color: white;
        border-radius: 40px;
        border: 3px solid black;
        text-decoration: none;
        padding: 10px;
        box-shadow: 0 0 0 2px orange;

        &:hover {
            background-color: darken(orange, 20%);
        }
    }
    }
}
</style>