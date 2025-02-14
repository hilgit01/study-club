<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <table>
    @foreach ($products as $product)
        <tr>
        <td>ID          : {{ $product->id }}            </td>
        <td>Code        : {{ $product->code }}          </td>
        <td>Nama        : {{ $product->name }}          </td>
        <td>Description : {{ $product->description }}   </td>
        <td>Qty         : {{ $product->qty }}           </td>
        <td>Price       : {{ $product->price }}         </td>
        </tr>
    @endforeach
    </table>
</body>
</html>