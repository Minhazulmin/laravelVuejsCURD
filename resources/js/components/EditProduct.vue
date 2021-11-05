<template>
    <div class="container">
        <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form @submit.prevent="updateProduct">
                    <div class="form-group">
                        <label for="">name</label>
                        <input type="text" class="form-control" v-model="product.name">
                    </div>
                    <div class="form-group">
                        <label for="">Details</label>
                        <input type="text" class="form-control" v-model="product.detail">
                    </div>

                    <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            product:{}
        }
    },
  created(){
      this.axios.get(`http://127.0.0.1:8000/api/products/${this.$route.params.id}`)
      .then((res) => {
          this.product = res.data
      });
  },
  methods:{

      updateProduct(){
          this.axios.patch(`http://127.0.0.1:8000/api/products/${this.$route.params.id}`,this.product)
          .then((res) => { this.$router.push({name:'home'});
          });
      }
  }
}
</script>