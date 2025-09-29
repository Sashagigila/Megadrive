<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог товаров</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Каталог товаров</h1>
    <div class="container">
      @foreach($products as $product)
     <div class="card">
       <p>{{ $product->name }}</p>
       <p>{{ $product->description }}</p>
       <p>Цена: {{$product->price}} &#8381</p>
      <hr>
     <form method="POST" action="{{route('products.destroy',$product->id)}}">
        @csrf
        @method('delete')
        <input type="submit" value="удалить">
     </form>
    </div>
      @endforeach
    </div>
</body>
</html>