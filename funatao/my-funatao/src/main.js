import Vue from 'vue'
import VueRouter from 'vue-router'
import App from './App'



//路由
import Home from './components/Home'
import NewProduct from './components/NewProduct'
import OnlineAtlas from './components/OnlineAtlas'
import About from './components/about/About'
import Product from './components/Product'
import NewProduts from './components/NewProduts'
import ProductDetails  from './components/productdetails/ProductDetails'
import ProductImage from './components/productdetails/ProductImage'


Vue.use(VueRouter);

const routes = [
  {path:'/',name:'homeLink',component:Home},
  {path:'/home',name:'homeLinks',component:Home},
  {path:'/product',name:"productLink",component:Product, children:[

    ]},
  {path:'/productdetails',name:'productDetailsLink', component:ProductDetails},
  {path:'/onlineatlas',name:'onlineAtlasLink',component:OnlineAtlas},
  {path:'/about',name:'aboutFNTLink',component:About},
  {path:'/productimage',name:'productImageLink',component:ProductImage},
  {path:'/newproduct',name:'newProductLink',component:NewProduct},
  {path:'/newproduts',name:'newprodutsLink',component:NewProduts},
  {path:'*',redirect:'/home'}
]

const router = new VueRouter({
  scrollBehavior(to, from, savedPosition){
    if(savedPosition){
      return savedPosition
    }else{
      return {x: 0, y:0}
    }
  },
  routes,
  mode:'history'
});


/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  components: { App },
  template: '<App/>'
})
