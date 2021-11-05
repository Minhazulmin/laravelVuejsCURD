<template>
   <div>
      <table class="table">
          <thead>
                <th>Name</th>
                <th>Details</th>
                <th>Actions</th>
          </thead>
          <tbody>
              <tr v-for="(data ,index) in products" :key="index">
                  <td>{{data.name}}</td>
                  <td>{{data.detail}}</td>
                  <td>
                      <router-link class="btn btn-info btn-sm" :to = "{ name:'edit',params:{id:data.id}}">Edit</router-link>
                      <button class="btn btn-danger btn-sm" @click="deleteproduct(data.id)">Delete</button>
                  </td>
              </tr>
          </tbody>
      </table>
   </div>
</template>
<script>
export default {
    data() {
        return{
            products:[]
        }
        
    },
    created(){
        axios.get('http://127.0.0.1:8000/api/products')
        .then(res => {this.products = res.data;
        });
    },
    methods:{
        deleteproduct(id){
            axios.delete(`http://127.0.0.1:8000/api/products/${id}`)
            .then(response => {
                let i = this.products.map(data => data.id).indexOf(id);
                console.log(id);
                        this.products.splice(i, 1)
            });
        }
    }
}
</script>