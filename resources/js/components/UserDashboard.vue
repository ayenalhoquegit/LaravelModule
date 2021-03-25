<template>
	<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{$route.meta.pageTitle}}</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-sync"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          Welcome to User panel
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
</template>


<script type="text/javascript">

export default {

    mounted(){
        console.log('User Dashboard router load');
    }
}
</script>
