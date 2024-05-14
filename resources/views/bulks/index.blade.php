@extends('layouts.layout')
@section('content')
<br></br>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">

    <a class="btn btn-success btn-sm" href="{{ route('bulk.create') }}"> <i class="fa fa-plus"></i> Novo Volume</a>
    <i class="bi bi-backspace-reverse"></i>
</div>


<table class="table table-bordered table-striped mt-4">
    <thead>
        <tr>
            <th width="80px">ID</th>
            <th>NOME</th>
            <th>SLUG</th>



            <th width="300px">AÇAO</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($bulks as $bulk)
        <tr>
            <td>{{ $bulk->id }}</td>
            <td>{{ $bulk->name }}</td>
            <td>{{ $bulk->slug }}</td>

            <td>
                <form action="{{ route('bulk.destroy',$bulk->id) }}" method="POST">

                    <a class="btn btn-info btn-sm" href="{{ route('bulk.show',$bulk->id) }}"><i class="fa-solid fa-list"></i> Show</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('bulk.edit',$bulk->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4">nenhuma volume.</td>
        </tr>
        @endforelse
    </tbody>

</table>

{!! $bulks->links() !!}

@endsection
