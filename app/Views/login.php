<?php include "partials/header.php" ?>





<section class="ftco-section ftco-intro">
    <div class="overlay"></div>
    <div class="container">
        <form action="" method="POST" style="z-index: 99; position:relative">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</section>





<?php include "partials/footer.php" ?>