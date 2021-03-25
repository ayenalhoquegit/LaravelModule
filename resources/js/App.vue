<template>
<div>
  <!-- Navbar -->
  <Navbar></Navbar>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <router-link to="/dashboard" class="brand-link">
      <img :src="getImage('AdminLTE/dist/img/AdminLTELogo.png')"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Smart School</span>
    </router-link>

    <!-- Sidebar -->
    <Sidebar></Sidebar>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <ContentHeader></ContentHeader>

    <!-- Main content -->
    <router-view></router-view>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  </div>

</template>
<script type="text/javascript">
  import Navbar from './components/layouts/Navbar';
  import Sidebar from './components/layouts/Sidebar';
  import ContentHeader from './components/layouts/ContentHeader';
	export default {
    components : {
       Navbar,
       Sidebar,
       ContentHeader
    },
		mounted(){
			console.log('Vue js frame with laravel 7..');
		}
	}
</script>
