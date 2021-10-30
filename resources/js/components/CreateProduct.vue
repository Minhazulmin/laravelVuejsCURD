<template>
    <div class="container">
        <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form @submit.prevent="addProduct">
                    <div class="form-group">
                        <label for="">name</label>
                        <input type="text" class="form-control" v-model="product.name">
                    </div>
                    <div class="form-group">
                        <label for="">Details</label>
                        <input type="text" class="form-control" v-model="product.detail">
                    </div>

                    <button type="submit" class="btn btn-info">Add Product</button>
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
    methods:{
        addProduct(){
            this.axios
            .post('http://127.0.0.1:8000/api/products',this.product)
            .then(response => (this.$router.push({ name: 'home'})
            ))
            .catch(err => console.log(err))
            .finally(() => this.loading = false)
        }
    }
}
</script>