<template>
    <div class="container">

<slot></slot>
        {{id}}

    </div>
</template>

<script>
    export default {
        props:['id']
        ,
        mounted() {
            console.log('Component mounted.');
            Echo.private(`post.${this.id}`)
            .listen('MyEvent',function (e) {
                //console.log(e.content);
                console.log(e.post.content);
            })

        }
    }
</script>
