@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Menu principal') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Você está logado!') }}
                    <p> Acesse os contatos abaixo</p>
                    <a href="/contatos" class="btn btn-secondary">Contatos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
