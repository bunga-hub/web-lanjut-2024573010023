<!DOCTYPE html>
<html>
   <head>
    <title>Data Passing Demo</title>
   </head>

   <body>
    
        <h1>Passing Data to Blade</h1>

        <h2>String</h2>
        <p>name: {{ $name }}</p>

        <h2>Array</h2>
        <ul>
            @foreach ($fruits as $fruits)
                <li>{{ $fruits }}</li>
            @endforeach
        </ul>

        <h2>Associative Array</h2>
        <p>ID: {{ $user['name'] }}</p>
        <p>Email: {{ $user['email'] }}</p>
        <p>Status: {{ $user['is_active'] ? 'Active' : 'Inactive' }}</p>

        <h2>Object</h2>
        <p>ID: {{ $product->id }}</p>
        <p>Product: {{ $product->name }}</p>
        <p>Price: Rp{{ number_format($product->price, 0, ',', '-') }}</p>
   </body>
</html>