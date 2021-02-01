@extends('master')
@section('content')
<table class="table table-hover">

    <tr>
        <th >Name</th>
        <th >
            {{ $view->name }}
        </th>
    </tr>
    <tr>
        <th>Price</th>
        <th >
            {{ $view->price }}
        </th>
    </tr>
    <tr>
        <th>expiry date</th>
        <th>
            {{ $view->expiry_date }}
        </th>

    </tr>
    <tr>
        <th>
            <a href="{{ route('product.index') }}" class="btn btn-primary">back</a>
        </th>
    </tr>

  </table>

@endsection
