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
                <form action="{{route('products.update')}}" method="post">
                    <input type="text" name="name" placeholder="Name">
                    <input type="text" name="description" placeholder="Description">
                    <input type="text" name="price" placeholder="Price">
                    <button type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
    </body>
</html>
