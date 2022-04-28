<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/main.css"/>

</head>
<body>

<section class="vh-100" >
    <div class="container h-100">
        <div class="row  justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" >
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-10 order-2 order-lg-1">

                                <p class=" h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Add item here</p>

                                <form class="mx-1 mx-md-4"  method="post" action="add.php">

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input class="border-2 rounded-md p-2  w-100" name="title"  required>

                                            <label class="form-label" for="title">Title</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input class="border-2 rounded-md p-2  w-100" type="number" name="price" required>

                                            <label class="form-label" for="price">Price</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input class="border-2 rounded-md p-2  w-100" type="number" name="listprice" required>

                                            <label class="form-label" for="listprice">List price</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input class="border-2 rounded-md p-2  w-100" name="brand" required>

                                            <label class="form-label" for="brand">Brand</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input class="border-2 rounded-md p-2  w-100" name="description" required>

                                            <label class="form-label" for="description">Description</label>
                                        </div>
                                    </div>


                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input class="border-2 rounded-md p-2  w-100" name="image" required>

                                            <label class="form-label" for="image">Image</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input class="border-2 rounded-md p-2  w-100" type="number" name="featured" required>

                                            <label class="form-label" for="featured">Featured(1-yes 2-no)</label>
                                        </div>
                                    </div>





                                    <div class="d-flex   mb-3 mb-lg-4">
                                        <input type="submit" name="productadd" value="Add" class="btn bg-orange-200 rounded-1 text-center font-bold">
                                    </div>



                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





</body>
</html>