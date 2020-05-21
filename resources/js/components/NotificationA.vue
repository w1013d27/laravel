<template>
<div>
    <button @click="receive">Receive Notifications</button>
</div>
</template>

<script>
    export default {
        name: "NotificationA",
        props:['userId'],
        methods:{
            receive(){

                Echo.private('App.User.'+this.userId)
                .notification((notification)=>{
                    console.log(notification);
                });
            }
        }
    }
</script>

<style scoped>

</style>
