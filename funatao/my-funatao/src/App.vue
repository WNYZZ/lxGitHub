<template>
  <div id="app" class="container-fluid">
    <app-header></app-header>
    <div class="container-fluid">
      <router-view></router-view>
    </div>
    <app-foot></app-foot>
  </div>

</template>

<script>
  import Header from './components/Header';
  import Foot from './components/Foot';
export default {
  name: 'App',
  components:{
    'app-header':Header,
    'app-foot':Foot
  },
  data () {
    return {

    }
  }
}
</script>

<style>
  .container-fluid{
    padding: 0;
  }
</style>
