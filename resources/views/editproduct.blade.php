@extends('master')
@section('content')
<table class="table table-hover">
    {{-- this is form --}}
    <form action="{{ route('product.update',$edit->id) }}" method="POST">
        @csrf
        <tr>
            <th >Name</th>
            <th >
                <input type="text" name="name" value="{{ $edit->name }}">
            </th>
        </tr>
        <tr>
            <th>
                Price
            </th>
            <th >
                <input type="text" name="price" value="{{ $edit->price }}">
            </th>
        </tr>
        <tr>
            <th>expiry date</th>
            <td>
                <input type="date" name="expiry_date" value="{{ $edit->expiry_date }}">
            </td>

        </tr>
        <tr>
        <th>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('product.index') }}" class="btn btn-primary">back</a>
        </th>
        </tr>
    </form>
  </table>

@endsection
