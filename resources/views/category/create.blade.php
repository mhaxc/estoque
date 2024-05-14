@extends('layouts.layout')

@section('content')


<div class="card mt-5">
    <h2 class="card-header">Nova Categoria</h2>
    <div class="card-body">



        <form action="{{ route('category.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="inputName" class="form-label"><strong>Name:</strong></label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="inputName" placeholder="Name">
                @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>


            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Salvar</button>
        </form>



        @endsection
