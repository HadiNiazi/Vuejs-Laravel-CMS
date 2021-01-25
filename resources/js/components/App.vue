<template>
<div>
    <div class="page-loader">
    <div class="bg-primary"></div>
  </div>

  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-2" id="app">
    <div class="layout-inner">

    <!-- sidebar widget  -->
      <sidebar />
      <!-- Layout container -->
      <div class="layout-container">
        <!-- Layout navbar -->
        <navbar :user="user" />
        <!-- / Layout navbar -->


        <!-- Layout content -->
     <div class="layout-content">

         <!-- Start Layout Content from here -->
         <div class="container-fluid flex-grow-1 container-p-y">

            <!-- Counters -->
            <div class="row">
                <router-view></router-view>
                <vue-progress-bar></vue-progress-bar>
            </div>
         </div>
          <!-- / End Layout Content from here -->





          <!-- Layout footer -->
         <!-- <footer /> -->
          <!-- / Layout footer -->

        </div>
        <!-- Layout content -->

      </div>
      <!-- / Layout container -->

    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-sidenav-toggle"></div>
  </div>
  <!-- / Layout wrapper -->

  <!-- Core scripts -->

</div>
</template>

<script>

import Sidebar from './Sidebar';
import Navbar from './Header';
import EventBus from '../event-bus';
export default {
    components:{
        Sidebar, Navbar
    },
    props:['user'],
    mounted(){
            EventBus.$emit('loginUser', this.user);

    }
}

</script>

