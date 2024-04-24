<!---------Header-------->
<?php include "../front_end/layouts/header.php"; ?>
<!---------End of Header-------->

<!---------Sidebar-------->
<?php include "../front_end/layouts/sidebar.php"; ?>
<!---------End of Sidebar-------->

<!---------Navbar-------->
<?php include "../front_end/layouts/navbar.php"; ?>
<!---------End of Navbar-------->

    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="content">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center mb-4">
                                <h1 class="user-title">User</h1>
                                <a href="create.php"><button class="button-click">Add New</button></a>
                            </div>
                            <div class="card-body" style="padding-top: 20px;">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-md">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tablebody">
                                            <tr>
        
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="../front_end/assets/js/crud/all.js"> </script>
    
<!---------Footer-------->
<?php include "../front_end/layouts/footer.php"; ?>
<!---------End of Footer-------->
