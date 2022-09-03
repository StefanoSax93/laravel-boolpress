<template>
    <nav class="navbar navbar-expand-md navbar-light bg-nav shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand text-uppercase" href="/">Boolpress</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto text-uppercase ml-4">
                    <li class="nav-item ">
                        <router-link class="nav-link" to="/">Home</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" :to="{ name: 'contacts' }">Contatti</router-link>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/posts">Post admin</a>
                    </li>
                </ul>


                <ul class="navbar-nav ms-auto text-uppercase">
                    <li>
                        <a href="/login" class="text-dark me-4 text-decoration-none">login</a>
                    </li>
                    <li>
                        <a href="/register" class="text-dark text-decoration-none">register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<style lang="scss">
    .bg-nav {
        background-color: orange;

    }

    
</style>