<form action="{{ route('product.create') }}" method="POST">
    @csrf
    <input type="date" name="expiry_date"> <br><br>
    <input type="text" name="name"><br><br>
    <input type="text" name="price">
    <button type="submit">submit</button>
</form>
