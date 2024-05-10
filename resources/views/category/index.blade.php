@extends('layouts.layout')

@section('content')
<br></br>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">

    <a class="btn btn-success btn-sm" href="#"> <i class="fa fa-plus"></i> Nova Categoria</a>
</div>

<table class="table table-bordered table-striped mt-4">
    <thead>
        <tr>
            <th width="80px">ID</th>
            <th>NOME</th>
            <th width="300px">Açao</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>

            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                    <a class="btn btn-info btn-sm" href="{{ route('products.show',$product->id) }}"><i class="fa-solid fa-list"></i> Show</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('products.edit',$product->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4">nenhuma categoria.</td>
        </tr>
        @endforelse
    </tbody>

</table>



@endsection
