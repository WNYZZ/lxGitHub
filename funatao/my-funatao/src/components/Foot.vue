<template>

    <div class="pos-f-t">
        <div class="container">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-6">
                <ul class="u1">NAVONATO</ul>
                <ul class="u2">Marketing Center :B103, yaofeng building, tao bo da dao, nanzhuang
                  huaxia ceramics town, chancheng district, guangdong province, China</ul>
                <ul class="u3">Email:ALEXWANG@NAVONATO.com</ul>
                <ul class="u4">
                  Copyright@2019NAVONATO Co.,Ltd . All Rights Reserved.
                  Solution by Let’JHSS
                </ul>
              </div>
              <div class="col-12 col-md-8 col-lg-6">
                <div class="guop row">
                  <div class="col-5">
                    <p class="p1">COMPANY</p>
                  <ul class="left-u">
                    <li>About Us</li>
                    <li><router-link :to="{name:'newprodutsLink'}">NEW Products</router-link></li>
                    <li>Catalogue</li>
                    <li>Contact</li>
                  </ul>
                  </div>
                  <div class="col-7">
                    <p class="p2">NAVONAT</p>
                  <ul class="p2-left">
                    <li>Sydney</li>
                    <li>Prague</li>
                    <li>Jakatar</li>
                    <li>Detroit</li>
                    <li>Seoul</li>
                    <li>Rome</li>
                    <li>HAnoi</li>
                    <li>OSLo</li>
                    <li>KYoto</li>
                    <li>BOGOTA</li>
                    <li>LISBON</li>
                  </ul>
                    <ul class="p2-right">
                      <li>BERLIN</li>
                      <li>MANILA</li>
                      <li>BANGKOK</li>
                      <li>MORITZ</li>
                      <li>ATHENS</li>
                      <li>MIAMI</li>
                      <li>PERTH</li>
                      <li>LONGDON</li>
                      <li>LASVEGAS</li>
                      <li>AUCKLAND</li>
                      <li>MOSCOW</li>
                      <li>CAPE TOWN</li>
                    </ul>
                  </div>

                </div>
              </div>
            </div>
        </div>

    </div>

</template>

<script>
import axios from 'axios'
    export default {
        name: "Foot",

      data(){
          return{

          }
      },
      created(){

      },
      methods:{
        collapseLink: function () {

          this.collapse = !this.collapse;
        },
        onlineImg: function () {
          window.open('url','/onlineatlas')
        },
        closeClick: function () {


        },
        dj: function () {

        }
      },
      mounted() {
        const _this = this;
        window.onresize = function temp() {
          _this.screenWidth = window.document.documentElement.clientWidth;
          if(_this.screenWidth>768){
           window.document.getElementById('navbarToggleExternalContent').classList.remove('show')
          }
        };
      }
    }
</script>

<style scoped>

  a:hover{
    text-decoration:none;
    color: red;
  }
  *{
    color: #4c4940;
  }
.u1{
  font-size: 34px;


}
.u2,.u3{
  font-size: 22px;
}
  .u4{
    font-size: 18px;
  }

  .p1,.p2{
    font-size: 32px;
  }
.left-u{
  text-transform: Uppercase ;
}
  .p2-left,.p2-right{
    float: left;
    font-size: 18px;
    text-transform: Uppercase ;
  }
  .p2-right{
    margin-left: 66px;
  }
  .p2-left li,.p2-right li,.left-u li{
    margin-bottom: 20px;
  }
  .p2-left li:hover,.p2-right li:hover,.left-u li:hover{
    cursor: pointer;
    color: red;
  }

  @media (max-width:471px) {
    .p1,.p2,.u1{
      font-size: 28px;
    }
    .p2-right{
      margin-left: 8%;
    }
    .p2-left,.p2-right,.left-u,.u2,.u3{
      font-size: 16px;
    }
  }
</style>
