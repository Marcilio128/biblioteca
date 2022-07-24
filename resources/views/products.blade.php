@extends('layouts.main')

@section('title', 'Livros')

@section('content')
    <section class="sec-book">
        <div class="container">
            <div class="book-initial">
                <h1 id="text-book-initial">Conheça nosso acervo de grandes livros!!!!</h1>
                <p id="paragrafo-initial-book">Com muitas historias para você se aventurar no universo da leitura, <br>
                venha conhecer esse novo mundo sem sair do conforto da sua casa</p>
                </div>
                <img class="img-Selecao" src="/img/livros.webp" alt="">
        </div>
    </section>
    
    <h1 class="book-conheca">Conheça nossos livros</h1>
    <section class="book-cards">
        <div class="container">
        <div class="card">
            <div class="card-img">
                <img src="/img/livro_Drummond.png" alt="">
        </div>
            <div class="card-title"> 
                <h3>Lorem ipsum</h3>
            </div>
            <div class="card-content">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In iaculis auctor sagittis. </p>
            </div>
            <div class="card-link">
                <button href="">More</button>                            
    </div>
</div>


    <div class="card">
        <div class="card-img">
            <img src="/img/livro_Drummond.png" alt="">
        </div>
    <div class="card-title"> 
        <h3>Lorem ipsum</h3>
    </div>
    <div class="card-content">
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In iaculis auctor sagittis. </p>
    </div>
    <div class="card-link">
        <button href="">More</button>     

        </div>
    </div>


    <div class="card">
        <div class="card-img">
            <img src="/img/livro_Drummond.png" alt="">
        </div>
        <div class="card-title"> 
            <h3>Lorem ipsum</h3>
        </div>
        <div class="card-content">
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In iaculis auctor sagittis. </p>
        </div>
        <div class="card-link">
            <button href="">More</button>                            
        </div>                     
</div>


    <div class="card">
        <div class="card-img">
            <img src="/img/livro_Drummond.png" alt="">
        </div>
        <div class="card-title"> 
            <h3>Lorem ipsum</h3>
        </div>
        <div class="card-content">
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In iaculis auctor sagittis. </p>
        </div>
            <div class="card-link">
                <button href="">More</button>                            
    </div>
</section>

@endsection