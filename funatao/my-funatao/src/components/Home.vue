<template>
  <div>
      <div class="banner">
        <div id="demo" class="carousel slide" data-ride="carousel" >
          <!-- 指示符 -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0"  v-for="(item, index) of banner" v-bind:key="index" v-bind:data-slide-to="index"  v-bind:class="{'active':index==0}"></li>
          </ul>
          <!-- 轮播图片 -->
          <div class="carousel-inner" >
            <div class="carousel-item" v-for="(item, index) of banner" v-bind:key="index" v-bind:class="{'active':index==0}">
              <img v-bind:src="path+item" />
            </div>
          </div>

          <!-- 左右切换按钮 -->
<!--          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>-->
        </div>

      </div>

      <div class="new container">
        <div id="new" class="carousel slide xs-hidden" data-ride="carousel">
          <!-- 指示符 -->
          <ul class="carousel-indicators">
            <li data-target="#new" v-bind:data-slide-to="index"  v-for="(item, index) of newProduct" v-bind:key="index" v-bind:class="{'active':index==0}"></li>

          </ul>
          <!-- 轮播图片 -->
          <div class="carousel-inner">
            <div class="carousel-item"v-for="(item, index) of newProduct" v-bind:key="index" v-bind:class="{'active':index==0}">
              <div class="row">
                <div class="col-md-4 col-lg-4">
                  <div class="newTitle">
                    {{item.title}}
                  </div>
                  <div class="newContent">
              <span class="title">
                {{item.en_title}}
              </span>
                    <span class="content">
               {{item.content}}
                {{item.en_content}}
              </span>
                  </div>
                  <router-link :to="{name:'productDetailsLink', query:{id:item.id}}"><span class="more">more</span></router-link>
                </div>
                <div class="col-md-8 col-lg-8">
                  <img v-bind:src="path+item.picurl" />
                </div>
              </div>
            </div>


          </div>

        </div>
        <div id="new1" class="carousel slide xs-show log-hidden" data-ride="carousel">
          <!-- 指示符 -->
          <ul class="carousel-indicators xs-hidden">
            <li data-target="#new1" data-slide-to="0" class="active"></li>


          </ul>
          <div class="carousel-inner">
            <div class="carousel-item" v-for="(item, index) of newProduct" v-bind:key="index" v-bind:class="{'active':index==0}">
              <div class="row">
                <div class="col-md-4 col-lg-4">
                  <div class="newTitle">

                  </div>
                  <div class="newContent">
              <span class="title">
  {{item.title}} {{item.en_title}}
              </span>
                    <img src="../../static/image/newLeftImg.jpg" />
                    <span class="content">
               {{item.content}}
                {{item.en_content}}
              </span>
                  </div>
                  <router-link :to="{name:'productDetailsLink', query:{id:item.id}}"><span class="more">more</span></router-link>
                </div>

              </div>
            </div>

          </div>

          <!-- 左右切换按钮 -->
          <a class="carousel-control-prev" href="#new1" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#new1" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
    <div class="product-back">
    <div class="product container">

     <div class="product-item content">
       <div class="row">
         <div class="col-12">
          <span class="title">
            EXCELLENT
            COLLECTION
          </span>
         </div>
       </div>
       <div class="row product-img-list">
         <div class="col-md-4 col-lg-3" v-for="(item, index) of product" v-bind:key="index" v-model="product">
           <router-link :to="{name:'productDetailsLink', query:{id:item.id}}">
           <div class="product-img-item-group">
            <span class="title">
                <p>{{item.en_title}}</p>
                {{item.title}}
            </span>
             <img v-bind:src="path+item.picurl"/>
           </div>
           </router-link>
         </div>



       </div>
     </div>
    </div>
    </div>
    <div class="news-list container">
      <div class="content">
      <div class="row">
        <div class="col-12">
          <span class="news-title">
            LATESE
            news
          </span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="news-group">
            <div class="text-group">
              <div class="title">
                  新闻标题
              </div>
              <div class="content">
                  新闻内容
              </div>
            </div>
            <img src="../../static/image/news/news-list.jpg" height="432" width="733"/>
          </div>
        </div>
        <div class="col-md-6">
          <div class="news-group">
            <div class="text-group">
              <div class="title">
                新闻标题
              </div>
              <div class="content">
                新闻内容
              </div>


            </div>
            <img src="../../static/image/news/news-list.jpg" height="432" width="733"/>
          </div>
        </div>
        <div class="col-md-6">
          <div class="news-group">
            <div class="text-group">
              <div class="title">
                新闻标题
              </div>
              <div class="content">
                新闻内容
              </div>


            </div>
            <img src="../../static/image/news/news-list.jpg" height="432" width="733"/>
          </div>
        </div>
        <div class="col-md-6">
          <div class="news-group">
            <div class="text-group">
              <div class="title">
                新闻标题
              </div>
              <div class="content">
                新闻内容
              </div>


            </div>
            <img src="../../static/image/news/news-list.jpg" height="432" width="733"/>
          </div>
        </div>
        <div class="col-md-6">
          <div class="news-group">
            <div class="text-group">
              <div class="title">
                新闻标题
              </div>
              <div class="content">
                新闻内容
              </div>


            </div>
            <img src="../../static/image/news/news-list.jpg" height="432" width="733"/>
          </div>
        </div>
        <div class="col-md-6">
          <div class="news-group">
            <div class="text-group">
              <div class="title">
                新闻标题
              </div>
              <div class="content">
                新闻内容
              </div>


            </div>
            <img src="../../static/image/news/news-list.jpg" height="432" width="733"/>
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
        name: "Home",

      data(){
          return{
            path:'http://localhost:8011/',
            close: false,
            banner:[],
            newProduct:[],
            product:[
              {
                id: '',
                'picurl': '',
                'title':'',
                'en_title':'',
                'content':'',
                'en_content' :'',
              }
            ],
            news:[]
          }
      },
      created(){

        axios.get('http://localhost:8011/Home.php').then((data)=>{

            this.banner = data.data.banner;

            this.newProduct = data.data.newproduct;

        });

      },
      mounted:function(){
        this.$nextTick(function () {
          var _this = this;
          var isScroll = true;
          document.onscroll = function(){
              if(isScroll){
                isScroll =!isScroll;
                var scrollTop = document.documentElement && document.documentElement.scrollTop;
                if(scrollTop>0 ){
                  console.log('滚动条');
                  axios.get('http://localhost:8011/product.php').then((data)=>{
                    _this.product = data.data.product;
                  });
                }
              }

          }


        })
      },
      methods:{


      },

    }
</script>

<style scoped>
  p{
    margin-bottom: 0!important;
  }
  .log-hidden{
    display: none;
  }
  .banner{
    max-width: 1920px;

    width: 100%;
  }
  .banner img{
    max-width: 100%;
  }
  .carousel-indicators li:hover{
    cursor: pointer;
  }

  /* 新闻 */
  .new{
        padding: 30px 0;
       }
  .newTitle {
    font-size: 50px;
    line-height: 60px;
    max-width: 60%;
  }
  .newContent .title{
    font-size: 50px;
    line-height: 60px;
    display: block;
    margin: 20px 0 60px;
    max-width: 60%;
  }

  .newContent .content{
    font-size: 28px;
    line-height: 60px;
    color: #d1cfcf;
  }
  .new img{
    width: 100%;
    height: auto;
    min-width: 100%;
  }
  .more{
    font-size: 36px;
    display: block;
    border: 1px solid #000000;
    text-align: center;
    width: 240px;
    height: 75px;
    line-height: 65px;
    margin: 52px 0 0 ;
    z-index: 999;

    color: #000000;
  }
  .carousel-indicators{
    margin-left: 25%;
    margin-right: 25%;
  }
  a{
    text-decoration:none!important;
  }
  .more:hover{
    cursor: pointer;

    color: #000000;
  }

  /* 产品*/
  .product{
    position: relative;
    padding: 20px 0 0 ;
    margin-top: 20px;
    width: 100%;
  }
  .product-back{
    position: relative;
  }
  .product-back::after{
    position: absolute;
    height: 830px;
    width: 100%;
    content: "";
    left: 0;
    top: 0;
    height: 90%;
    background-color: #e6e6e6;
    z-index: -999;
  }
/*  .product-back{
  position: absolute;
  left: 0;
  z-index: -999;
  margin-top: -20px;
  background: #a6a6a6;
  width: 100%;
  height: 1050px;
}*/
  .product-item{

  }
  .product .title{
    display: block;
    font-size: 36px;
    max-width: 240px;
    color: #ffffff;
  }
  .product-img-list{


  }
  .product-img-item-group{
    margin:50px auto 0;
    position: static;
  }
  .product-img-item-group span.title{
    position: absolute;
    padding: 2% 6%;
    color: #000000;
  }
  .product-img-item-group img{
   display: inline-block;
    width: 100%;
    height: 100%;
  }

  .product-img-item-group .title{
    position: relative;
    z-index: 2;
    color: #ffffff!important;
    visibility: hidden;
    opacity: 0;
    transition: all .7s ease;
  }
  .product-img-item-group {
    position: relative;
  }
  .product-img-item-group:after{
    position: absolute;
    content: "";
    opacity: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #864966;
    visibility: hidden;
    transition: all .7s ease;
  }

  .product-img-item-group:hover .title,.product-img-item-group:hover:after{
    visibility: visible;    color: #ffffff!important;
    opacity: 100;
    transition: all .7s ease;
    cursor: pointer;

  }
  /*新闻*/
  .news-list{

    margin-top: 30px;
    margin-bottom: 200px;
  }

  .news-title{
    font-size: 50px;
    line-height: 50px;
    display: block;
    padding-left: 2%;
    max-width: 25%;
  }
  .news-group{
    position: static;
    margin-top: 48px;
    overflow-x: hidden;
  }
  .news-group:hover{
    cursor: pointer;
  }
  .text-group{
    position: absolute;
    padding: 30px 0 0 50px;
  }
  .text-group .title,.text-group .content{
    font-size: 36px;
  }

  .news-group img{
    display: block;
    margin: auto;
    width: 100%;
    height: 100%;

  }



  /*---------------------------------------------media----------------------------------------------------------------*/
  /*---------------------------------------------media----------------------------------------------------------------*/










  @media (max-width: 1199px){

    .newTitle{
      font-size: 40px;
      line-height: 42px;
      max-width: 25%;
    }
    .newContent .title{
      font-size: 40px;
      line-height: 42px;
      display: block;
      margin: 12px 0 50px;
      max-width: 50%;
    }
    .newContent .content{
      font-size: 24px;
      line-height: 40px;
      color: #d1cfcf;
    }
    .more{
      margin-top: 46px;
      zoom: 0.7;
    }
  }


  @media (max-width: 991px){

    .newTitle{
      font-size: 22px;
      line-height: 26px;
      max-width: 25%;
    }
    .newContent .title{
      font-size: 22px;
      line-height: 26px;
      display: block;
      margin: 6px 0 20px;
      max-width: 48%;
    }
    .newContent .content{
      font-size: 18px;
      line-height: 32px;
      color: #d1cfcf;
    }
    .more{
      margin-top: 40px;
      zoom: 0.5;
    }
  }
  @media (max-width: 767px){

    .xs-hidden{
      display: none!important;
    }
    #new .carousel-indicators{

    }
    .xs-show{
      display: block;
    }
    .new{
      padding:  5px;
    }
    .carousel-item{
      overflow: visible;
    }
    .newTitle{
      font-size: 26px;
      line-height: 30px;

    }
    .newContent{
      position: relative;
    }
    .newContent .title{
      font-size: 26px;
      line-height: 30px;
      display: block;
      margin: 8px 0 10px;

    }
    .newContent .content{
      font-size: 18px;
      line-height: 30px;
    }
    .more{
      zoom: 0.6;
        margin: 30px auto auto;
    }
    .product-back:after{
      height: calc(100% + 30px);
    }

    .news-list{
      margin-top: 50px;
    }
    .news-group{
      margin-top: 30px;
    }
  }
</style>
