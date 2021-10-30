import AllProduct from './components/AllProduct.vue';
import Createproduct from './components/Createproduct.vue';
import EditProduct from './components/EditProduct.vue';


export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllProduct
    }, 
    {
        name: 'create',
        path: '/create',
        component: Createproduct
    }, 
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditProduct
    }
];