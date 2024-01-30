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
    <a href={{ route('product.index') }} id="inventoryback"><i class="fas fa-arrow-left"></i> Go to Product Inventory</button> </a>
    <div class="container">
        <h1 class="m-3">My Products</h1>
        <div class="row">
                @foreach($products as $product)
                <div class="col-4">
                    <div class="card mb-3 home-card">
                        <img src={{ asset('storage/' . $product->image) }} class="card-img-top" style="object-fit: cover;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description}}</p>
                        </div>
                        <ul class="list-group list-group-flush bg-dark">
                            <li class="list-group-item text-center text-warning bg-dark"><h5><b>$ {{$product->price}}</b></h5></li>
                        </ul>
                    </div>
                </div>
                  @endforeach
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>