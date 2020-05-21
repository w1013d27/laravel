<template>
    <div>
     {{arr}}
        <button @click="accept">accept</button>
        <button @click="send">send</button>
        <button @click="receive">receive</button>
       <label> 输入：<input  @focusout="send" v-model="input"></label>
    </div>
</template>

<script>
    export default {
        props:['arr']
        ,
        data(){
            return {
                input: '',
            }
        },
        methods:{
            accept(){
                axios.get('/task').then((response)=>{
                    console.log(response.data);
                })
            },
            send(){
                Echo.private('chat')
                    .whisper('typing',{
                        name: 'I am tying'+this.input,
                    })

            },
            receive(){
                Echo.private('chat')
                    .listenForWhisper('typing', (e) => {
                        console.log(e.name);
                    });
            }
        }
    }
</script>

<style scoped>

</style>
