@extends('master')
@section('content')
    <form action="{{ route('product.create') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Product Name</label>
            <input type="text"  name="name"class="form-control" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Price</label>
            <input type="text" name="price" class="form-control" >
        </div>
        <div class="mb-3 ">
            <label for="exampleInputPassword1" class="form-label">Expiry date</label>
            <input type="date" name="expiry_date" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection





{{-- <form action="{{ route('product.create') }}" method="POST">
    @csrf
    <input type="date" name="expiry_date"> <br><br>
    <input type="text" name="name"><br><br>
    <input type="text" name="price">
    <button type="submit">submit</button>
</form> --}}
