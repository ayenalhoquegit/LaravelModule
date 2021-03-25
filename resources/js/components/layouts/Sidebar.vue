<template>
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img :src="getImage('AdminLTE/dist/img/user2-160x160.jpg')" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <router-link to="dashboard" class="d-block">Alexander Pierce</router-link>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item has-treeview">
                    <a :href="'/logout'" class="nav-link">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
</template>



<script type="text/javascript">
export default {
    data(){
        return {
            sideBarMenu : []
        }
    },
    
    created(){
        
    },
    methods:{
        
    }

}
</script>
