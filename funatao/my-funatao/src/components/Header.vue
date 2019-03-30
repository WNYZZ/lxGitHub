<template>
  <header>
    <div class="pos-f-t">
      <a href="#" class="navbar-brand smlogo"><router-link :to="{name:'homeLink'}">
        <img id="smlogo-img" src="../../static/image/logo_03.jpg"height="82" width="316"/>
      </router-link></a>
      <nav class="navbar navbar-dark bg-dark  smlogo-navbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <span></span><span></span><span></span>
          </span>

        </button>
      </nav>
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <ul class="navbar-nav">
            <!-- <li ><router-link tag='div' to="/" class="navbar-link">主页</router-link></li> -->
            <!--<li ><router-link :to="homeLink" class="navbar-link">主页</router-link></li>-->
            <li ><router-link :to="{name:'homeLink'}" class="navbar-link" data-toggle="collapse" data-target="#navbarToggleExternalContent">首页</router-link></li>
            <li ><router-link :to="{name:'aboutFNTLink'}" class="navbar-link" data-toggle="collapse" data-target="#navbarToggleExternalContent">关于富纳陶</router-link></li>
            <li ><router-link :to="{name:'productLink'}" class="navbar-link" data-toggle="collapse" data-target="#navbarToggleExternalContent">产品系列</router-link></li>
            <li ><router-link :to="{name:'newProductLink'}" class="navbar-link" data-toggle="collapse" data-target="#navbarToggleExternalContent">品牌动态</router-link></li>
            <li ><a  v-on:click="closeClick" class="navbar-link" data-toggle="collapse" data-target="#navbarToggleExternalContent">联系我们</a></li>
            <li ><router-link :to="{name:'onlineAtlasLink'}"  class="navbar-link" target="_blank">在线图册</router-link ></li>
          </ul>
        </div>
      </div>

    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a href="#" class="navbar-brand"><router-link :to="{name:'homeLink'}">
        <img src="../../static/image/logo_03.jpg"height="82" width="316"/>
      </router-link></a>
      <ul class="navbar-nav" v-bind:class="{'collapseShou':collapse}">
        <!-- <li ><router-link tag='div' to="/" class="navbar-link">主页</router-link></li> -->
        <!--<li ><router-link :to="homeLink" class="navbar-link">主页</router-link></li>-->
        <li ><router-link :to="{name:'homeLink'}" class="navbar-link" >首页</router-link></li>
        <li ><router-link :to="{name:'aboutFNTLink'}" class="navbar-link" data-toggle="collapse" data-target="#navbarToggleExternalContent">关于富纳陶</router-link></li>
        <li ><router-link :to="{name:'productLink'}" class="navbar-link">产品系列</router-link></li>
        <li ><router-link :to="{name:'newProductLink'}" class="navbar-link">品牌动态</router-link></li>
        <li ><a  v-on:click="closeClick" class="navbar-link" data-toggle="collapse" data-target="#navbarToggleExternalContent">联系我们</a></li>
        <li ><router-link :to="{name:'onlineAtlasLink'}"  class="navbar-link" target="_blank">在线图册</router-link ></li>

      </ul>

    </nav>
    <div class="concact" v-bind:class="{'closeShow':close}">
      <ul class="close" v-on:click="closeClick">
        <img src="../../static/image/close.jpg" />
      </ul>
      <img src="../../static/image/logo_03.jpg" height="82" width="316"/>
      <div class="concact-guop">
        <p class="p1">
          Foshan Fu Na Tao co.,Ltd
        </p>
        <p class="p2 cn">
          佛山市富纳陶有限公司座落在具有悠久历史的“南国陶都”佛山，是一家专业生产高档马赛克的厂家
          富纳陶不仅传承了传统陶瓷工业的精髓，而且敢于打破传统，勇于创新。我们拥有先进的生产技术和管理理念，
          高素质的研发团队和销售队伍，能够根据客户的需求为客户度身订造艺术精品。我们一直秉承“质量第一，顾客第一”的经营方针，
          极大的满足国内外客户的不同需求。我们没有发明陶瓷，我们只是改变了它的用途。富纳陶，致力于成为装饰美学的先锋！
        </p>
        <p class="p3">生产基地：佛山市南庄</p>
        <p class="p4">
          Tel：+86 757 99999999  Fax：+86 757 88888888<br>
          Email：admin@funatao.com
        </p>
      </div>
    </div>
  </header>
</template>

<script>
import axios from 'axios'
    export default {
        name: "Header",

      data(){
          return{
            collapse: false,
            screenWidth: "",
            close: false,
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
          this.close = !this.close;
          console.log(this.close);

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
    cursor: pointer;
  }
    .pos-f-t{
      display: none;
    }
    .navbar{
      height: 130px;
      background-color: #ffffff!important;
      padding-left: 54px;
    }
  .navbar-nav a{
    font-size: 1.8rem;
    color: #000000!important;
    margin: 0 48px;
  }
    .navbar a:hover{
      text-decoration: none;
    }
  .navbar-nav{
    margin-left: 5%;
  }
    @media (max-width: 1800px) {
      .navbar-nav{
        min-width: 70%;
      }
      .navbar a img{
        zoom: 0.9;
        margin-left: 4%;
      }
      .navbar-nav a{
        font-size: 1.8rem;
        margin: 0 38px;
      }
    }

  @media (max-width: 1600px) {
    .navbar-nav{
      padding-left: 1%;
      right: 0;
      flex-direction: row!important;
    }
    .navbar a img{
      zoom: 0.8;
      margin-left: 4%;
    }
    .navbar-nav a{
      font-size: 1.4rem;
      margin: 0 22px;
    }
  }
    @media (max-width: 1199px){
      .navbar-brand{
        margin-left: 2%;
      }
      .navbar-nav{
        padding-left: 1%;
        flex-direction: row;
      }
      .navbar a img{
        margin-left: 5px;
      }
      .navbar{
        display: flex;
        position: relative;
        padding: 5px;
        height: auto;
        right: 0;
      }

      .navbar a img{
        zoom: 0.6;
        margin-left: 4%;
      }
      .navbar-nav a{

        font-size: 1.2rem;
        margin: 0 20px;
      }
      .navbar-nav{

      }
    }

    @media (max-width: 991px){


      .navbar a img{
        zoom: 0.4;
        z-index: 9999;
      }
      .navbar-expand-lg .navbar-nav{
        flex-direction:row;
      }
      .navbar-nav a{
        font-size: 1.0rem;
        margin: 0 12px;
      }
    }
  @media (max-width: 767px){
    .navbar-nav{

      flex-direction: column!important;
    }
    .navbar-expand-lg{
      display: none;
    }
    .collapse{
      background-color: #ffffff;


    }
    .collapse .bg-dark{
      width: 100%;
      background-color: #ffffff!important;
    }
    .pos-f-t{
      display: block;
      position: relative;
      min-height: 60px;

      border: 1px solid #e2e3e5;
      border-top: 0;

    }
    .p-4{
      background-color: #ffffff!important;


    }
    .navbar-toggler{
      position: absolute;
      right: 0;
      top: 10px;

    }
  .navbar-toggler-icon{
    background-image:none;
    margin-top: 4px;
  }
    .navbar-toggler-icon span{
      display: block;
      height: 1px;
      border-bottom: 2px solid #000000;
      margin-bottom: 8px;
    }

    .smlogo-navbar{
      position: relative;
      background-color: #ffffff!important;

    }
    .navbar a img{
      margin-left: 5px;
    }
    .navbar{
      position: static;
      padding: 5px 5px 0;
      height: auto;

    }
    .smlogo{
      margin-left: 8px;
    }
    #smlogo-img{
      zoom: 0.5;
      margin: 8px 0 0;

    }

    .navbar-link{
      display: block;
      text-align: center;

    }

    ul.navbar-nav li{
      margin: 10px 0;
    }
    .navbar-link:hover{
      text-decoration: none;

    }
  }
    .concact{
      position: fixed;

      top: 0;
      max-width: 1920px;
      width: 100%;
      height: 100%;
      background-color: #ffffff;
      visibility: hidden;
      transition: all .7s ease;
      z-index: 999;
      opacity: 0;
    }
    .closeShow{
      opacity: 100;
      visibility: visible!important;
    }
    .concact img{
      display: block;
      float: left;
      margin: 10% 0 0 5%;
    }

    .concact-guop{
      float: right;
      max-width: 50%;
    }

    .p1{
      margin-top: 20%;
      font-size: 30px;
      color: #363636;

      font-weight: bold;
    }
    .p2{
      font-size: 13px;
      margin: 30px 0;
      line-height: 21px;
      max-width: 80%;
      color: #7d7d7d;
    }

    .p3{
      line-height: 21px;
      margin-bottom: 20px;
      color: #7d7d7d;
    }

    .p4{
      font-size: 16px;
      color: #7d7d7d;
    }

    .close{
      position: fixed;
      top: 10%;
      right: 5%;


    }
    .close:hover{
      cursor: pointer;
    }


  @keyframes fadeIn {
/*    0%   {height: 0;}
    25%  {height: 10px;}
    50%  {height: 40px;}
    100% {height: 100%;}*/
    from {height: 0;}
    to {height: auto;}
  }

</style>
