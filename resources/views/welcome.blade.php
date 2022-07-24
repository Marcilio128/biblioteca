@extends('layouts.main')

@section('title', 'Drummond')

@section('content')
   <section class="sec-initial">
        <div class="container">
            <div class="text-section-initial">
                <h3>BEM VINDO A DRUMMOND BIBLIOTECA!</h3>
                <p>Com um acervo inteiro cheio de grande nomes e grandes <br> 
                historia, aproveite e embarque em um novo mundo, o mundo <br> 
                da leitura venha conhecer diversas historias, e se impresionar <br> 
                com o mundo que os livros são capazes de trazer a quem os lê,<br> 
                mundos de fantasia, aventura, romance e poesia, tudo isso você <br> 
                é capaz de encontrar e pode encontrar aqui, então o que você está esperando? <br> 
                Venha agora e conheça a nossa biblioteca de uma maneira nova e inusitada agora de maneira digital!!!</p>
            </div>
            <div class="animation-initial">
                <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_icnvjpdc.json"  class="animation" background="transparent"  speed="1" loop  autoplay></lottie-player>
            </div>
        </div>
    </section>

    <section class="sec-meet">
        <h2 class="title-meet">Conheça nosso acervo</h2>
            <div class="container">
                <div class="meet">
        
                    <img src="/img/Drummond.jpg" class="img-acervo" alt="">
        
                <div class="meet-text">
                    <h3>Carlos Drummond De Andrade</h3>
                    <p>Considerado por muitos o mais influente poeta brasileiro do século XX Drummond, <br> 
                    foi um dos principais poetas da segunda geração do modernismo brasileiro, embora <br> 
                    sua obra não se restrinja a formas e temáticas de movimentos específicos. Os temas<br> 
                    de sua obra são vastos e empreendem questões existenciais, até sobre sentido da vida<br> 
                    e da morte, passando por questões cotidianas e políticas, como a utopia socialista,<br> 
                    dialogando sempre com correntes tradicionais e contemporâneas de sua época.<br> 
                    As características formais e estilísticas de sua obra também são vastas,<br> 
                    destacando-se, por vezes, o dialeto mineiro.</p>
                    </div>
                    
                    <img src="/img/Lispector.jpg" class="img-acervo"alt="">
                    <div class="meet-text">
                        <h3>Clarice Lispector</h3>
                        <p class="sobre">Clarice uma escritora e jornalista brasileira nascida na Ucrânia. <br> 
                        Autora de romances, contos, e ensaios, é considerada uma das escritoras brasileiras <br> 
                        mais importantes do século XX. Sua obra está repleta de cenas cotidianas simples e tramas <br> 
                        psicológicas, reputando-se como uma de suas principais características a epifania <br> 
                        de personagens comuns em momentos do cotidiano. Quanto às suas identidades nacional <br> 
                        e regional, declarava-se brasileira e pernambucana.</p>
                    </div>

                    <img src="/img/Assis.png" class="img-acervo"alt="">
                    <div class="meet-text">
                        <h3>Machado De Assis</h3>
                        <p>Machado De Assis foi um escritor brasileiro, considerado por muitos <br>
                        Críticos, estudiosos, escritores e leitores o maior nome da literatura brasileira. <br>
                        Escreveu em praticamente todos os gêneros literários, sendo poeta, romancista, cronista,<br>
                        dramaturgo, contista, folhetinista, jornalista e crítico literário. Testemunhou a <br> 
                        Abolição da escravatura e a mudança política no país quando a República substituiu o Império, <br>
                        além das mais diversas reviravoltas pelo mundo em finais do século XIX e início do XX, <br>
                        tendo sido grande comentador e relator dos eventos político-sociais de sua época.</p>
                </div>
            </div>
        </div>
</section>
@endsection
