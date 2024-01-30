<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href={{ asset('css/styles.css') }}>
</head>
<body>
    <a href={{ route('product.index') }}> <button class="btn btn-dark"><i class="fas fa-arrow-left"></i> Cancel</button> </a>
    <div>
        @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
    </div>
    <div class="container p-3">
        <div class="card" style="padding: 2%; margin:2% 10%;">
            <div class="card-body">
                <h1 class="mb-3">Insert Products</h1>
                <form action= {{ route('product.store') }} method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="" class="form-label">Product Name</label>
                                <input type="text" class="form-control" name="name" id="" placeholder="Enter Product name">
                              </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="" class="form-label">Product Image</label>
                                <input type="file" class="form-control" name="image" id="" placeholder="Enter Product name" accept="image/*">
                              </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Product Quantity</label>
                                <input type="text" class="form-control" name="qty" id="" placeholder="Enter Product quantity">
                              </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Product Price</label>
                                <input type="text" class="form-control" name="price" id="" placeholder="Enter Product prize">
                              </div>
                        </div>
                        <div class="col-12">
                            <div class= "mb-5">
                                <label for="" class="form-label">Product Description</label>
                                <input type="textarea" class="form-control" name="description" placeholder="Enter Product description" id="" style="height: 100px">
                              </div>
                        </div>
                    </div>
                    <div style="float: right">
                        <button class="btn btn-primary" type="submit">Add new product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>