<template>
    <div class="NewProduts container">
        <div class="text-guop">
          <p class="p1">NEW PRODUCTS</p>
          <p class="p2">The Mosaic with easy match color and natural stone texture, has the naturally decoration effects and
            could match the space combination for every style.Due To Printing The Relationship May Be Different
            From The Actual Product Color. Please Prevail In Kind.</p>
        </div>
        <div class="img-list">
          <div class="img-list-guop" v-on:click="passwordFun">
            <div class="img-item">

              <img src="../../static/image/newproducts/newprodus_03.jpg" height="226" width="235"/>
              <p class="item-1">Model:FG664626</p>
              <p class="item-2">Size:600x600mm</p>
            </div>
          </div>
          <div class="img-list-guop"  v-on:click="passwordFun">
            <div class="img-item">

              <img src="../../static/image/newproducts/newprodus_03.jpg" height="226" width="235"/>
              <p class="item-1">Model:FG664626</p>
              <p class="item-2">Size:600x600mm</p>
            </div>
          </div>
          <div class="img-list-guop"  v-on:click="passwordFun">
            <div class="img-item">

              <img src="../../static/image/newproducts/newprodus_03.jpg" height="226" width="235"/>
              <p class="item-1">Model:FG664626</p>
              <p class="item-2">Size:600x600mm</p>
            </div>
          </div>
          <div class="img-list-guop">
            <div class="img-item">

              <img src="../../static/image/newproducts/newprodus_03.jpg" height="226" width="235"/>
              <p class="item-1">Model:FG664626</p>
              <p class="item-2">Size:600x600mm</p>
            </div>
          </div>
          <div class="img-list-guop">
            <div class="img-item">

              <img src="../../static/image/newproducts/newprodus_03.jpg" height="226" width="235"/>
              <p class="item-1">Model:FG664626</p>
              <p class="item-2">Size:600x600mm</p>
            </div>
          </div>
          <div class="img-list-guop">
            <div class="img-item">

              <img src="../../static/image/newproducts/newprodus_03.jpg" height="226" width="235"/>
              <p class="item-1">Model:FG664626</p>
              <p class="item-2">Size:600x600mm</p>
            </div>
          </div>
          <div class="img-list-guop">
            <div class="img-item">

              <img src="../../static/image/newproducts/newprodus_03.jpg" height="226" width="235"/>
              <p class="item-1">Model:FG664626</p>
              <p class="item-2">Size:600x600mm</p>
            </div>
          </div>
          <div class="img-list-guop">
            <div class="img-item">

              <img src="../../static/image/newproducts/newprodus_03.jpg" height="226" width="235"/>
              <p class="item-1">Model:FG664626</p>
              <p class="item-2">Size:600x600mm</p>
            </div>
          </div>
          <div class="img-list-guop">
            <div class="img-item">

              <img src="../../static/image/newproducts/newprodus_03.jpg" height="226" width="235"/>
              <p class="item-1">Model:FG664626</p>
              <p class="item-2">Size:600x600mm</p>
            </div>
          </div>
          <div class="img-list-guop">
            <div class="img-item">

              <img src="../../static/image/newproducts/newprodus_03.jpg" height="226" width="235"/>
              <p class="item-1">Model:FG664626</p>
              <p class="item-2">Size:600x600mm</p>
            </div>
          </div>
          <div class="img-list-guop">
            <div class="img-item">

              <img src="../../static/image/newproducts/newprodus_03.jpg" height="226" width="235"/>
              <p class="item-1">Model:FG664626</p>
              <p class="item-2">Size:600x600mm</p>
            </div>
          </div>
          <div class="img-list-guop">
            <div class="img-item">

              <img src="../../static/image/newproducts/newprodus_03.jpg" height="226" width="235"/>
              <p class="item-1">Model:FG664626</p>
              <p class="item-2">Size:600x600mm</p>
            </div>
          </div>
          <div class="img-list-guop">
            <div class="img-item">

              <img src="../../static/image/newproducts/newprodus_03.jpg" height="226" width="235"/>
              <p class="item-1">Model:FG664626</p>
              <p class="item-2">Size:600x600mm</p>
            </div>
          </div>
          <div class="img-list-guop">
            <div class="img-item">

              <img src="../../static/image/newproducts/newprodus_03.jpg" height="226" width="235"/>
              <p class="item-1">Model:FG664626</p>
              <p class="item-2">Size:600x600mm</p>
            </div>
          </div>
          <div class="img-list-guop">
            <div class="img-item">

              <img src="../../static/image/newproducts/newprodus_03.jpg" height="226" width="235"/>
              <p class="item-1">Model:FG664626</p>
              <p class="item-2">Size:600x600mm</p>
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
        name: "NewProduts",
      data (){
        return {
          passwordClick: false,
          checkPass: true,
          password: "",
          borderStyle: {
            border:"",
            "box-shadow": "",
            transition: 'all .7s ease',
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
            this.$router.push({name: 'productImageLink'});
          }else{

            this.borderStyle.border = "1px solid red!important";
            this.borderStyle["box-shadow"] = "0 0 10px #f00"



          }
        }

      }
    }
</script>

<style scoped>
*{
  color: #494646;
}

.NewProduts{
  padding-left: 50px;
  margin-top: 120px;
}
p{
  margin: 0;
}
 .text-guop .p2{
    font-size: 14px;
    max-width: 55%;
  }
 .text-guop .p1{
    font-size: 30px;

  }

.text-guop  p.item-1{
    font-size: 18px;
    color: #000000;
  }
.text-guop p.item-2{
  font-size: 18px;

}
.img-list-guop{
  display: inline-block;
  max-width: calc(20% - 50px);
  margin: 0 22px 30px 0;
}
.img-list-guop:hover{
  cursor: pointer;
}
  .img-item img{
    display: inline-block;
    max-width: 100%;
    height: auto;
  }
 .img-list .item-1{
    margin-top: 10px;
  }

 .img-list{
    margin: 100px 0 200px;
  }





  @media (max-width: 991px) {
    .NewProduts{
      padding-left: 60px;
    }
    .img-list-guop{
      display: inline-block;
      max-width: 28%;
      margin: 0 22px 30px 0;
    }
  }
@media (max-width: 767px) {
  .img-list{
    margin-top: 50px;
  }
  .p1{
    margin-top: 30px;

  }
  .p2{
    max-width: 80%;
  }
  .NewProduts{
    padding-left: 70px;
  }
  .img-list-guop{
    display: inline-block;
    max-width: 25%;
    margin: 0 22px 30px 0;
  }
  p.item-1,p.item-2{
    font-size: 14px;
  }
}

@media (max-width: 450px) {
  .img-list{
    margin-top: 50px;
  }
  .p1{
    margin-top: 30px;

  }
  .p2{
    max-width: 80%;
  }
  .NewProduts{
    padding-left: 15px;
  }
  .img-list-guop{
    display: inline-block;
    max-width: 48%;
    margin: 0 22px 30px 0;
  }
  p.item-1,p.item-2{
    font-size: 14px;
  }
  .img-list .img-list-guop:nth-child(odd){
    margin: 0 0 30px 0;
  }
  .img-list .img-list-guop:nth-child(even){
    float: right;
    margin: 0 0 30px 0;
  }
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
  background: url("../../static/image/bg.png") repeat;
  z-index: 99999;
  transition: all .7s ease;

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
.password .p1{
  font-size: 25px;
  margin: 75px 0 10px 0;
}

.password .p2{
  font-size: 15px;
}
.password .text{
  border: solid 1px #d2d2d2;
  font-size: 14px;
  line-height: 35px;
  height: 35px;
  color: #b0b0b0;
  text-align: center;
  margin: 55px auto 30px auto;

}

.password .submit{
  margin: auto;
  border: 0;
  width: 42px;
  height: 43px;
  background: url("../../static/image/pass.png")  no-repeat  ;
  clear: both;
}
.submit:hover{
  cursor: pointer;
}
.password .p3{
  font-size: 15px;
  color: #7d7d7d;
  margin-top: 65px;
}

</style>
