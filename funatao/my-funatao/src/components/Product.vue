<template>
    <div class="container product">
      <div class="row">
        <div class="col-6 col-sm-4 col-lg-3">
          <router-link :to="{name:'productDetailsLink'}" class="navbar-link">
          <div class="productguop">
            <div></div>

            <img src="../../static/image/product/AT.jpg" />
          </div>
          </router-link>
        </div>
        <div class="col-6 col-sm-4 col-lg-3">
          <div class="productguop">
            <div></div>

            <img src="../../static/image/product/AU.jpg" />
          </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-3">
          <div class="productguop">
            <div></div>

            <img src="../../static/image/product/BA.jpg" />
          </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-3">
          <div class="productguop">
            <div></div>
            <img src="../../static/image/product/BE.jpg" />
          </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-3">
          <div class="productguop">
            <div></div>
            <img src="../../static/image/product/BO.jpg" />
          </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-3">
          <div class="productguop">
            <div></div>
            <img src="../../static/image/product/CA.jpg" />
          </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-3">
          <div class="productguop">
            <div></div>
            <img src="../../static/image/product/DE.jpg" />
          </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-3">
          <div class="productguop">
            <div></div>
            <img src="../../static/image/product/HA.jpg" />
          </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-3">
          <div class="productguop">
            <div></div>
            <img src="../../static/image/product/JA.jpg" />
          </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-3">
          <div class="productguop">
            <div></div>
            <img src="../../static/image/product/KY.jpg" />
          </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-3">
          <div class="productguop">
            <div></div>
            <img src="../../static/image/product/LA.jpg" />
          </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-3">
          <div class="productguop">
            <div></div>
            <img src="../../static/image/product/LO.jpg" />
          </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-3">
          <div class="productguop">
            <div></div>
            <img src="../../static/image/product/MA.jpg" />
          </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-3">
          <div class="productguop">
            <div></div>
            <img src="../../static/image/product/MI.jpg" />
          </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-3">
          <div class="productguop">
            <div></div>
            <img src="../../static/image/product/MOR.jpg" />
          </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-3">
          <div class="productguop">
            <div></div>
            <img src="../../static/image/product/OS.jpg" />
          </div>
        </div>
      </div>
    </div>
</template>

<script>
    export default {
        name: "Product"
    }
</script>

<style scoped>
  .product{
    padding: 56px;
  }
  .productguop img{
    max-width: 100%;
  }
  .productguop{
    margin-bottom: 30px;
  }
  .productguop:hover{
    cursor: pointer;
  }
  @media (max-width: 767px) {
    .productguop{
      margin-bottom: 25px;
    }
    .product{
      padding: 56px 5px 0;
    }
    .col-sm-6{
      padding: 0 5px;
    }

  }
  @media (max-width: 575px) {
    .productguop{
      margin-bottom: 5px;
    }
    .product{
      padding: 56px 5px 0;
    }
    .col-sm-6{
      padding: 0 5px;
    }
    .product .col-6:nth-child(odd){
      padding-right: 2.5px;
    }
    .product .col-6:nth-child(even){
      padding-left: 2.5px;
    }
  }
</style>
