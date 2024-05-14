@extends('layouts.layout')

@section('content')


<div class="card mt-5">
    <h2 class="card-header">Novo Volume</h2>
    <div class="card-body">



        <form action="{{ route('bulk.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="inputName" class="form-label"><strong>slug:</strong></label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="inputName" placeholder="sigla">
                <label for="inputName" class="form-label"><strong>name:</strong></label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="inputName" placeholder="Nome da Categoria ">
                @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>


            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Salvar</button>
        </form>



        @endsection
