@extends('master')
@section('content')
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Expiry date</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($result as $row)
            <tr>
                <th scope="row">{{ $row->id }}</th>
                <td>{{ $row->name }}</td>
                <td>{{ $row->price }}</td>
                <td>{{ $row->expiry_date }}</td>
                <td>
                    <a href="{{ route('product.view',$row->id) }}" class="btn btn-ms btn-primary">view</a>
                    <a href="{{ route('product.edit',$row->id) }}" class="btn btn-ms btn-info">edit</a>
                    <a href="{{ route('product.delete',$row->id) }}" class="btn btn-ms btn-danger">delete</a>
                </td>

            </tr>
        @endforeach
        <tr>
            <td class="text-center">
                {{ $result->links() }}
            </td>
        </tr>


    </tbody>
  </table>

@endsection



