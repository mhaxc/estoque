@extends('layouts.layout')

@section('content')

<div class="card mt-5">
    <h2 class="card-header">Editar </h2>
    <div class="card-body">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="{{ route('category.index') }}"><i class="fa fa-arrow-left"></i> Voltar</a>
        </div>

        <form action="{{ route('category.update',$category->id) }}" method="POST">
            @csrf
            @method('PUT')



            <div class="mb-3">
                <label for="inputName" class="form-label"><strong>Name:</strong></label>
                <input type="text" name="name" value="{{ $category->name }}" class="form-control @error('name') is-invalid @enderror" id="inputName" placeholder="Name">
                @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            @if ($message = Session::get('success'))
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 mb-5">
                <div class=" bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">
                        <p>{{ $message }}</p>
                    </span>
                </div>
            </div>
            @endif

            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Atualizar</button>
        </form>

    </div>
</div>
@endsection
