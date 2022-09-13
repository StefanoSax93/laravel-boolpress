import Home from "./pages/home.vue"
import Contacts from "./pages/contacts.vue"
import Posts from "./pages/posts/index.vue"
import PostShow from "./pages/posts/show.vue"
import PageNotFound from "./pages/PageNotFound.vue"

export const routes = [
    { path: "/", component: Home, name: "home" },
    { path: "/contatti", component: Contacts, name: "contacts" },
    { path: "/posts/:slug", component: PostShow, name: "posts.show" },
    { path: "/posts", component: Posts, name: "posts.index" },
    { path: "*", component: PageNotFound  },
]