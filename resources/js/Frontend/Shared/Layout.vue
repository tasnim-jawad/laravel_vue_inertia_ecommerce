<template>
    <div>
        <Header />
       	<div class="main-wrapper box-shadow">
            <slot />
        </div>
        <Footer />
    </div>
</template>

<script>
    import Header from "./Header.vue";
    import Footer from "./Footer.vue";

    export default {
        components: { Header, Footer },
    }
</script>