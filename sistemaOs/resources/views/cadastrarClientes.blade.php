@extends('layouts.main')

@section('title','Cadastrar Clientes')


@section('navbar')
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">LOGO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page">Cadastrar clientes</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@endsection

@section('content')

<section class="container mt-5">
    <h1 class="clientes-h1">Cadastrar Clientes</h1>
    <form class="row g-3" action="/clientes" method="post" >
        @csrf
        <div class="col-md-6">
            <label for="nome" class="form-label">Nome<span>*</span></label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="col-6">
            <label for="email" class="form-label">Email<span>*</span></label>
            <input type="email" class="form-control" id="email" placeholder="seu_email@email.com" name="email"required>
        </div>
        <div class="col-md-12">
            <label for="endereco" class="form-label">Endereço<span>*</span></label>
            <input type="text" class="form-control" id="endereco" placeholder="Avenida Alameda das Travessas, nº 111, Edifício Bosque do Cerrado, apartamento 2222" name="endereco" required>
        </div>

        <div class="col-4">
            <label for="telefone" class="form-label">Telefone<span>*</span></label>
            <input type="text" class="form-control" id="telefone" name="telefone" required>
        </div>
        <div class="col-md-4">
            <label for="datanasc" class="form-label">Data de nascimento<span>*</span></label>
            <input type="date" class="form-control" id="datanasc" name="datanasc" required>
        </div>
        <div class="col-md-4">
            <label for="cep" class="form-label">Cep<span>*</span></label>
            <input type="text" class="form-control" id="cep" name="cep" required>
        </div>

        <div class="col-12" >
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</section>

@endsection
