<template>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li v-if="currentPage !== 1" class="page-item"><a class="page-link" href="#" @click="changePage(currentPage - 1)">Previous</a></li>
            <li class="page-item" :class="{ 'active': pageNum === currentPage }" v-for="pageNum in totalPages">
                <a class="page-link" href="#" @click="changePage(pageNum)">{{  pageNum  }}</a>
            </li>
            
            <li v-if="currentPage !== totalPages" class="page-item"><a class="page-link" href="#" @click="changePage(currentPage + 1)">Next</a></li>
        </ul>
    </nav>
</template>

<script>
export default {
    props: {
        currentPage: Number,
        nextPage: Number,
        totalPages: Number
    },
    methods: {
        changePage(newPage) {
            this.$emit("changePage", newPage);
        }
    }
}
</script>