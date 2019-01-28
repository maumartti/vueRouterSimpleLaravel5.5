<template>
    <div id="main">
        <h2>probrando vue2</h2>
        <router-link to="/home2">HOME 2</router-link>
        <form v-on:submit.prevent="createItem">
            <div class="input-group">
                <input type="text" class="form-control input-sm" v-model="newItem" maxlength="255">
                <span class="input-group-btn">
                    <input type="submit" class="btn btn-primary btn-sm" value="agregar">
                </span>
            </div>
        </form>
        <div class="input-group">
            <ul>
                <li v-for="item in items">
                    <em>({{ since(item.created_at )}})</em> {{ item.descripcion }}  
                </li>
            </ul>
        </div>    
    </div>
</template>

<script>
    import axios from 'axios'
    import toastr from 'toastr'
    import moment from 'moment'

    moment.locale('es');

    export default {
       data (){
            return {
                items: [],
                newItem: '',
            }
       },
       created: function(){
            this.getVues();
       },
       methods: {
            since: function(id){
                return moment(id).fromNow();
            },
            getVues: function(){
                var urlVue = 'getVues';
                axios.get(urlVue).then(response => {
                    this.items = response.data;
                    console.log(response.data);
                });
            },
            createItem: function(){
                var url = 'setVue';
                axios.post(url, {
                    descripcion: this.newItem
                }).then(response => {
                    this.getVues();
                    this.newItem = '';
                    toastr.success('Item agregado !');
                }).catch(error => {
                    toastr.error('Error');
                })
            }
       }
    }
</script>
