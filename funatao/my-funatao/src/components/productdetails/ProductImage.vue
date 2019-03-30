<template>
    <div class="container-fluid">

      <div class="contnet-text container">
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
            this.$router.push({name: 'homeLink'});
          }else{

                this.borderStyle.border = "1px solid red!important";
                this.borderStyle["box-shadow"] = "0 0 10px #f00"
          }
        }

      },
      method:{

      }
    }
</script>

<style scoped>

.contnet-text{
  position: absolute;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: #ffffff;
  z-index: 9999;
}

  .product-maximg{
    margin-top: 50px;
    margin-bottom: 60px;
  }
  .product-maximg img{
    max-width: 100%;
  }

</style>
