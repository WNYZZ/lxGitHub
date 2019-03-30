<template>
    <div class="container-fluid">
      <div class="banner">
        <img src="../../../static/image/product/product-details.jpg" />
      </div>
      <div class="contnet-text container">
        <p>The Mosaic with easy match color nad natural stone texture, has the</p>
        <p>
          The Mosaic with easy match color nad natural stone texture, has the
          The Mosaic with easy match color nad natural stone texture, has the
          The Mosaic with easy match color nad natural stone texture, has the
        </p>
        <p>The Mosaic with easy match color nad natural stone texture, has the</p>
        <p>The Mosaic with easy match color nad natural stone texture, has the
          The Mosaic with easy match color nad natural stone texture, has the
          The Mosaic with easy match color nad natural stone texture, has the</p>
        <p>The Mosaic with easy match color nad natural stone texture, has the</p>
        <p>          The Mosaic with easy match color nad natural stone texture, has the
          The Mosaic with easy match color nad natural stone texture, has the
          The Mosaic with easy match color nad natural stone texture, has the</p>
          <div class="FG">
            <img src="../../../static/image/product/FG1.jpg" />
          </div>

      </div>

      <div class="container product-list">
        <div class="hr"></div>
        <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-6 col-md-4 col-lg-2" v-on:click="passwordFun">
            <div class="item-guop">
              <img src="../../../static/image/product/RO01.jpg" />
              <div class="item-text">
                <span class="model">Model:FG664626</span>
                <span class="size">Size:600x600mm</span>
                <span class="faces">4faces</span>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-2" v-on:click="passwordFun">
            <div class="item-guop">
              <img src="../../../static/image/product/RO01.jpg" />
              <div class="item-text">
                <span class="model">Model:FG664626</span>
                <span class="size">Size:600x600mm</span>
                <span class="faces">4faces</span>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-2" v-on:click="passwordFun">
            <div class="item-guop">
              <img src="../../../static/image/product/RO01.jpg" />
              <div class="item-text">
                <span class="model">Model:FG664626</span>
                <span class="size">Size:600x600mm</span>
                <span class="faces">4faces</span>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-2" v-on:click="passwordFun">
            <div class="item-guop">
              <img src="../../../static/image/product/RO01.jpg" />
              <div class="item-text">
                <span class="model">Model:FG664626</span>
                <span class="size">Size:600x600mm</span>
                <span class="faces">4faces</span>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-2" v-on:click="passwordFun">
            <div class="item-guop">
              <img src="../../../static/image/product/RO01.jpg" />
              <div class="item-text">
                <span class="model">Model:FG664626</span>
                <span class="size">Size:600x600mm</span>
                <span class="faces">4faces</span>
              </div>
            </div>
          </div>
          <div class="col-lg-1 md-hidden"></div>
          <div class="col-lg-1 md-hidden"></div>
          <div class="col-6 col-md-4 col-lg-2" v-on:click="passwordFun">
            <div class="item-guop">
              <img src="../../../static/image/product/RO01.jpg" />
              <div class="item-text">
                <span class="model">Model:FG664626</span>
                <span class="size">Size:600x600mm</span>
                <span class="faces">4faces</span>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-2" v-on:click="passwordFun">
            <div class="item-guop">
              <img src="../../../static/image/product/RO01.jpg" />
              <div class="item-text">
                <span class="model">Model:FG664626</span>
                <span class="size">Size:600x600mm</span>
                <span class="faces">4faces</span>
              </div>
            </div>
          </div>
        </div>

        <div class="row product-maximg">
          <div id="product-maximg" class="carousel slide" data-ride="carousel">
            <!-- 指示符 -->
            <ul class="carousel-indicators">
              <li data-target="#product-maximg" data-slide-to="0" class="active"></li>
              <li data-target="#product-maximg" data-slide-to="1"></li>
              <li data-target="#product-maximg" data-slide-to="2"></li>
            </ul>
            <!-- 轮播图片 -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="col-12">
                  <img src="../../../static/image/product/B1.jpg" />

                </div>
              </div>
              <div class="carousel-item">
                <div class="col-12">
                  <img src="../../../static/image/product/B1.jpg" />

                </div>
              </div>
              <div class="carousel-item">
                <div class="col-12">
                  <img src="../../../static/image/product/B1.jpg" />

                </div>
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
      </div>

      <div class="password" v-bind:class="{'show': passwordClick, 'hidden' :!passwordClick}" v-on:click="passwordFun">
        <div class="password-guop text-center" @click.stop>
            <p class="p1">请输入密码查看产品大图</p>
          <p class="p2">Enter the password to view the Hi-Re pictures</p>
          <input type="password" class="text" placeholder="Enter Password" v-model="password" @keyup.enter="submit" :style="borderStyle">
          <div class="submit" v-on:click="submit"></div>
          <p class="p3">如需帮助请致电：+86-13700000000</p>
        </div>
      </div>
    </div>

</template>


<script>
    export default {
        name: "productDetails",
      data (){
        return {
          passwordClick: false,
          checkPass: true,
          password: "",
          borderStyle: {
            border:"",
            "box-shadow": "",
            transition: 'all 1s ease',
            outline: "none"
          }
        }
      },
      methods:{
        passwordFun: function () {
          this.passwordClick = !this.passwordClick;
          this.borderStyle.border = " 1px solid #000000";
          this.borderStyle["box-shadow"] = ""
          this.password = ""
        },
        submit: function () {
          if(this.password == '123456' || this.password == 123456){
            //this.$router.push({name: 'productImageLink'});
            this.passwordClick = !this.passwordClick;
            window.open('productimage','_blank');
          }else{

                this.borderStyle.border = "1px solid red!important";
                this.borderStyle["box-shadow"] = "0 0 10px #f00"



          }
        }

      }
    }
</script>

<style scoped>
.banner img{
  max-width: 100%;

}

.item-guop:hover{
  cursor: pointer;
}
  .contnet-text{

    padding:68px  15% 0;
  }
  .contnet-text p:nth-child(even){
    color: #716f6f;
  }
.contnet-text p:nth-child(odd){
  font-weight: bold;
}
  .FG img{
    display: block;

    margin: 130px auto 70px ;
  }
  .hr{
    width: 100%;
    height: 1px;
    border-bottom: 2px solid #cccdcd;
    margin-bottom: 80px;
  }

  .product-list img{
    max-width: 100%;
  }
  .product-list div.col-6{
      margin-bottom: 15px;
  }

  .item-text .model{
    font-weight: bold;
  }

.product-maximg{
  margin-top: 285px;
  margin-bottom: 200px;
}
.faces{
  display: block;
}



@keyframes fadeIn {
from{opacity: 0;}
to{opacity:100;}
}

@keyframes fadeInUp {
  from{opacity: 100; }
  to{opacity:0; }
}
.show{
  display: block;

  animation: fadeIn 1s ease;

}
.hidden{

  transition: all 1s ease;
  animation: fadeInUp 1s ease;
  animation-fill-mode: forwards;
  transition: all 1s ease;
  visibility: hidden;


}

.password{
  position: fixed;
  top: 0;
  left: 0;

  width: 100%;
  height: 100%;
  background: url("../../../static/image/bg.png") repeat;
  z-index: 99999;
  transition: all 1s ease;

}


 .password-guop{
  position: absolute;
  left: 50%;
  top: 50%;
  margin-left: -275px;
  margin-top: -235px;
  width: 570px;
  height: 470px;
  background-color: #ffffff;
  z-index: 1;

}
.p1{
  font-size: 25px;
  margin: 75px 0 10px 0;
}

.p2{
  font-size: 15px;
}
.text{
  border: solid 1px #d2d2d2;
  font-size: 14px;
  line-height: 35px;
  height: 35px;
  color: #b0b0b0;
  text-align: center;
  margin: 55px auto 30px auto;

}

.submit{
margin: auto;
  border: 0;
  width: 42px;
  height: 43px;
  background: url("../../../static/image/pass.png")  no-repeat  ;
  clear: both;
}
.submit:hover{
  cursor: pointer;
}
.p3{
  font-size: 15px;
  color: #7d7d7d;
  margin-top: 65px;
}



@media (max-width: 991px) {
  .md-hidden{
    display: none;
  }
}



  @media (max-width: 767px) {
    .product-list div.col-6:nth-child(odd){
      padding-left: 7.5px;
    }
    .product-list div.col-6:nth-child(even){
      padding-right: 7.5px;
    }
    .product-list div.col-6 img{
      display: block;
      margin: auto;
    }
    .item-text{
      padding-left: 12.5%;
    }
  }
@media (max-width: 509px){
  .item-text{
    padding-left: 10%;
  }
}
@media (max-width: 499px){
  .item-text{
    padding-left: 8%;
  }
}
@media (max-width: 479px){
  .item-text{
    padding-left: 6%;
  }
}
@media (max-width: 459px){
  .item-text{
    padding-left: 4%;
  }
}
@media (max-width: 459px){
  .item-text{
    padding-left: 2%;
  }
}
@media (max-width: 421px){
  .item-text{
    padding-left: 0;
  }
}
</style>
