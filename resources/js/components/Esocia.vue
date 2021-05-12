<template>
   <table class="table text-center">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Arquivo</th>
      <th scope="col">Nome</th>
      <th scope="col">Celular</th>
      <th scope="col">Email</th>
      <th scope="col">Mensagem</th>
      <th scope="col">Data</th>
      <th scope="col">IP</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="cont in esocias" :key="cont.id">
      <th scope="row">{{ cont.id }}</th>
      <td>{{ cont.name }}</td>
      <td>{{ cont.name }}</td>
      <td>{{ cont.celular }}</td>
      <td>{{ cont.email }}</td>
      <td>{{ cont.mensagem }}</td>
      <td>{{ cont.created_at | formatDate }}</td>
      <td>{{ cont.ip }}</td>
    </tr>

  </tbody>
</table>
</template>

<script>
    export default {
       data() {
           return {
               esocias:[],
           }
       },

       methods: {
           async listar(){
               const res = await axios.get('esocia');
               this.esocias=res.data;
           }
       },

       created(){
           this.listar();
       },


    }
</script>
