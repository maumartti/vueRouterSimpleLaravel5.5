<template>
    <div class="inner-pages">
        <h2>probrando vue2</h2>
        <router-link to="/home2">HOME 2</router-link>
        <router-link to="/home3">HOME 3</router-link>
        <form v-on:submit.prevent="createItem">  
            <div class="input-group mb-3">
              <input type="text" class="form-control" v-model="newItem" aria-label="Recipient's username" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit" id="button-addon2">Agregar</button>
              </div>
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
