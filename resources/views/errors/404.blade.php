@extends('layouts.app-404')
@section('title','Pagina no encontrada')
@section('content')
<div class="error-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="error-text">
                        <h1 class="error">404</h1>
                        <div class="im-sheep">
                            <div class="top">
                                <div class="body"></div>
                                <div class="head">
                                    <div class="im-eye one"></div>
                                    <div class="im-eye two"></div>
                                    <div class="im-ear one"></div>
                                    <div class="im-ear two"></div>
                                </div>
                            </div>
                            <div class="im-legs">
                                <div class="im-leg"></div>
                                <div class="im-leg"></div>
                                <div class="im-leg"></div>
                                <div class="im-leg"></div>
                            </div>
                        </div>
                        <h4>Oops! No encontramos esta pagina!</h4>
                        <p>parece que la pagina a la cual intentas acceder no existe.</p>
                        <a href="/" class="btn btn-primary btn-round">Volver al Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection