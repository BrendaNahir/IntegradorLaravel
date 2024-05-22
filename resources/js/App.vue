<template>
     <div>
           <div class="wrapper">
                <!-- Navbar -->
                <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
                    <div class="container">
                        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                            <!-- Left navbar links -->
                            <ul class="navbar-nav">

                                <li class="nav-item">
                                    <!-- Use name -->
                                    <!-- Agregamos exact para que vue-router-link-active detecte cual esta activo -->
                                    <router-link exact :to="{ name:'comments.index' }" class="nav-link">List Comment</router-link>
                                    <!--
                                        Use path
                                        <router-link to="/" class="nav-link">List Comment</router-link>
                                    -->

                                    <!-- <a href="#" class="nav-link">Welcome Comment</a> -->
                                </li>
                                <li class="nav-item">
                                    <!-- Use name -->
                                        <router-link exact :to="{name:'comments.create'}" class="nav-link">Create Comment</router-link>
                                    <!--
                                        Use Path
                                        <router-link to="/comments/create" class="nav-link">Create Comment</router-link>
                                    -->
                                    <!-- <a href="#" class="nav-link">List Comment</a> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- /.navbar -->

                <div class="content-wrapper" style="margin-left: 0px;">
                    <div class="content">
                        <div class="container">
                            <router-view></router-view>

                            <!-- <comments-index></comments-index> -->


                        </div>
                    </div>
                </div>

                <!-- Control Sidebar -->
                <aside class="control-sidebar control-sidebar-dark">
                    <!-- Control sidebar content goes here -->
                </aside>
                <!-- /.control-sidebar -->

                <!-- Main Footer -->
                <footer class="main-footer">
                    <!-- To the right -->
                    <div class="float-right d-none d-sm-inline">
                    Anything you want
                    </div>
                    <!-- Default to the left -->
                    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
                </footer>
            </div>
     </div>
</template>
