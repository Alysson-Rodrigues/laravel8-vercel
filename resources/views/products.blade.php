<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

    </head>
    <body>
    <div>
        <div >
            <div>
                <h1>Products</h1>
                    @foreach($products as $product)
                        <div style="margin: 50px 0;">
                            <h2>{{$product->name}}</h2>
                            <p>{{$product->description}}</p>
                            <p>{{$product->price}}</p>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
    </body>
</html>
