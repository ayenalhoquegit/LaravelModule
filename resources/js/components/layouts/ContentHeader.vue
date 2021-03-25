<template>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{$route.meta.pageTitle}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <template v-for="(v, i) in $route.meta.bredCrumbs">
                            <li class="breadcrumb-item" v-if="i == (Object.keys($route.meta.bredCrumbs).length - 1)">{{v}}</li>
                            <li class="breadcrumb-item" v-else><router-link to="/dashboard">{{v}}</router-link></li>
                        </template>
                    </ol>
                </div>
            </div>
        </div>
    </section>
</template>
