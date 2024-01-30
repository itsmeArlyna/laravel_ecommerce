<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INDEX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href={{ asset('css/styles.css') }}>
  </head>
  <body>
     <a href={{ route('product.display')}} id="inventoryback"><i class="fas fa-arrow-left"></i> Go to Product Display</button> </a>
    <div class="container pt-5">
        <h1>Your Products</h1>
    <div>
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
    </div>
    <div>
        <div style="float: right" class="mb-3" id="create">
            <button class="btn btn-success">
            <a href="{{ route('product.create') }}">
                <i class="fas fa-plus"></i> Add more Products
            </a>
        </button>
        </div>
        <div class="col-3">
            <form action="/search" method="post" class="d-flex">
            @csrf
            <input type="text" class="form-control" name="search" placeholder="Search products">
            <button class="btn btn-primary" type="submit">Search</button>
        </form>
    </div>
        <table class="table table-hover text-center">
            <thead class="table" >
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Description</th>
                <th colspan="2" class="text-center">Action</th>
            </tr>
        </thead>
            <tbody class="table-group-divider">
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" style="max-width: 100px;">
                    @else
                        No image available
                    @endif
                </td>
                <td>{{$product->qty}}</td>
                <td>$ {{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td class="text-center" id="action">
                    <a href={{route('product.edit',['product'=>$product])}}><i class="fas fa-edit"></i></a>
                </td>
                <td class="text-center">
                    <form action="{{ route('product.destroy', ['product' => $product]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?')">
                        @csrf
                        @method('delete')
                
                        <button type="submit" style="background: none; border: none; padding: 0; margin: 0; cursor: pointer;">
                            <i class="fas fa-trash" style="color: red;"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>