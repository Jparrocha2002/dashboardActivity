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
                <div class="form-container">
                    <h2>Create New User</h2>
                    <form id="createForm" action="#" method="post">
                        <div class="form-group">
                            <label for="first_name">First Name:</label>
                            <input type="text" id="first_name" name="first_name">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name:</label>
                            <input type="text" id="last_name" name="last_name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password">
                        </div>
                        <div class="form-group">
                            <button type="submit">Submit</button>
                            <a href="post.php" class="back-button">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <script src="../front_end/assets/js/crud/create.js"> </script>

<!---------Footer-------->
<?php include "../front_end/layouts/footer.php"; ?>
<!---------End of Footer-------->
