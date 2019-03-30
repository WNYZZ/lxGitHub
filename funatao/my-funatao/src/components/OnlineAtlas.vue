<template>
  <div class="container-fluid" style="width:100%; height: 100vh;">
    <div class="e">
      <!-- <embed src="../../static/image/fnt.pdf" width="100%" height="auto"  ></embed>-->
      <embed src="../../static/image/fnt.pdf" width="100%"  v-bind:height="heights" ></embed>
    </div>



  </div>
</template>

<script>
    export default {
        name: "OnlineAtlas",
      data(){
          return{
            heights: 0
          }
      }
      ,created() {
        this.heights = window.screen.availHeight-80;
        console.log( this.heights);
        document.body.parentNode.style.overflow = "hidden";
      },methods:{

      }
    }

</script>

<style scoped>
.container-fluid{
  position: absolute;
  z-index: 9999;
  top: 0;
  background-color: #ffffff;
}



</style>
