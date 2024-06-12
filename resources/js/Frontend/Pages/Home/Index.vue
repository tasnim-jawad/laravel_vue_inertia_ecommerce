<template>
    <div>
    <ul>
        <li><Link href="/">Home</Link></li>
        <li><Link href="/about">About</Link></li>
        <li><Link href="/contact">Contact</Link></li>
        <li><Link href="/gallery">Gallery</Link></li>
    </ul>
        <h1>this is home page444</h1>
    </div>
</template>

<script>
    import { Link } from '@inertiajs/vue3'
    export default {
        components: {
            Link
        }
    }

</script>