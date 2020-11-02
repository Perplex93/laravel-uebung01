<h1>Product SHOW Page</h1>
<p>ProductID: {{$productID}}</p>
@for($i = 0; $i<5; $i++)
    <p>$i = {{$i}}</p>
@endfor
@php
echo $productID;
@endphp