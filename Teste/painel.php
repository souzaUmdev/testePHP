<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-courses_pages.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Curso 1</title>
</head>
<body>
    <header>
        <div class="img-header">
          <img src="images/logo.jpeg" alt="marca">
        </div>
          <nav>
            <ul class="nav-links">
              <li><a href="../index.html">Início</a></li>
              <li><a href="sobre">Sobre</a></li>
              <li><a href="contato">contato</a></li>
            </ul>    
            <div class="menu-icon" onclick="Menu()">
              &#9776;
            </div>
            
          </nav>
      </header>
    <main>
    Bem vindo ao Painel, <?php echo $_SESSION['nome']; ?>.
        <section class="banner">
            <div class="banner-content margin">
                <img src="images/bannerSeminarioLacan.png" alt="">
            </div>
        </section>
        <section class="content-body margin">
            <p>
                O Curso Preparatório em Lacan é uma pequena Fragmentação Psicanalítica dos Seminários que Lacan Transmitiu. Vamos tentar produzir um estudo dinâmico e autêntico da Letra do Lacan já escrito em sua diversas Traduções. Aqui iremos estudar as possíveis demarcações e pensamentos do Lacan como estrutura e organização dos seminários, no enodamento ao seus registros em amarração ao nó Borromeu-Borromeano. Uma leitura articulada ao Tempo ou períodos dando ênfase a cada Registro. 
            </p>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Introdução
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>
                            Jacques Lacan, um pensador muito vivo e radical na voz e na letra, que produz efeitos sobre o Campo do Inconsciente, tornou-se psicanalista a partir de seu retorno a Freud, mas não apenas – ele avança sobre o próprio campo fundado por seu antecessor e "reinventa a Psicanálise".
                        </p>
                        <span class="middle-title">Há muitos mitos.</span>
                        <p>
                            Lacan nos retorna a Freud não para uma releitura, mas pensar no que seja a Psicanálise em sua própria essência, nos convocando a exigência de reincluir no mundo do saber (Sujeito, Suposto, Saber) do qual haviam se afastados a partir do momento em que os pós-freudianos reduziram a Psicanálise a uma técnica de adaptação ligada a medicina e a psicologia do Eu. Surge em Lacan a Ética do desejo, lugar que ele mesmo nunca saiu de seus trilhos como um "bom Freudiano".
                        </p>
                        <span class="middle-title">
                            Por que Lacan?
                        </span>
                        <p>
                            Implica não recuar frente a sua grande contribuição: o Real. Incluir na própria experiência em intensão e na transmissão em extensão o real é não recuar diante do impossível do desejo do analista.
                        </p>
                        <span class="middle-title">Interpretaçao e Transmissão</span>
                        <p>
                            Lacan conduziu os 27 seminários, com o primeiro intitulado: Os escritos técnicos de Freud (1953-1954). Cada seminário tem sua particulariedade, concentrando-se em diferentes aspectos da psicanálise, baseados em aulas orais, enfatizando a experiência de transmissão do conhecimento. Esses seminários são considerados essenciais para compreender a psicanálise lacaniana. 
                        </p>
                        <span class="middle-title">Acesse abaixo os matériais desse módulo</span>
                        <div class="content-files">
                            <div>
                               <a href="arquivos teste/Teste1.docx" target="_blank">
                                    <img src="images/pdf-icon.svg" alt="Pdf">
                                </a> 
                            </div>
                            <div>   
                                <a href="arquivos teste/videoplayback.m4a" target="_blank">
                                    <img src="images/audiobook-icon.svg" alt="">
                                </a>  
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Módulo I
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <h2>
                            1º Tempo: "Estádio do Espelho como Formador do Eu" (1949)
                        </h2>
                        <ul>
                            <li>
                                <p>Estádio do Espelho</p>
                            </li>
                            <li>
                                <p>A ênfase no Registro do Imaginário</p>
                            </li>
                            <li>
                                <p>Formação do Eu</p>
                            </li>
                        </ul>
                        <span class="middle-title">Acesse abaixo os matériais desse módulo</span>
                        <div class="content-files">
                            <div>
                               <a href="arquivos teste/Teste1.docx" target="_blank">
                                    <img src="images/pdf-icon.svg" alt="Pdf">
                                </a> 
                            </div>
                            <div>   
                                <a href="arquivos teste/videoplayback.m4a" target="_blank">
                                    <img src="images/audiobook-icon.svg" alt="">
                                </a>  
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Módulo II
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <h2>
                            2º Tempo Congresso de Roma (1953)
                        </h2>
                        <ul>
                            <li>
                                <p>Primazia do Simbólico</p>
                            </li>
                            <li>
                                <p>Linguística Estrutural</p>
                            </li>
                            <li>
                                <p>Função do Pai a teoria do Nome-do-Pai</p>
                            </li>
                        </ul>
                        <p>
                            É sua função na estruturação do desejo e da lei, ligando-a ao Édipo e à ênfase na entrada do Simbólico.
                        </p>
                        <span class="middle-title">Acesse abaixo os matériais desse módulo</span>
                        <div class="content-files">
                            <div>
                               <a href="arquivos teste/Teste1.docx" target="_blank">
                                    <img src="images/pdf-icon.svg" alt="Pdf">
                                </a> 
                            </div>
                            <div>   
                                <a href="arquivos teste/videoplayback.m4a" target="_blank">
                                    <img src="images/audiobook-icon.svg" alt="">
                                </a>  
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Módulo III
                      </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <h2>
                            3º Tempo: "Seminário XX mais ainda" ( 1972) 
                        </h2>
                        <ul>
                            <li>
                                <p>O Real e o Gozo</p>
                            </li>
                            <li>
                                <p>Lógica do Gozo: Os diferentes tipos de gozo, como o Gozo Fálico e o Gozo do Outro e o mais- de-gozar.</p>
                            </li>
                            <li>
                                <p>Falasser: um ser que fala. O sujeito da fala para o corpo falante, onde a fala é uma forma de gozo que afeta o corpo.</p>
                            </li>
                        </ul>
                        <span class="middle-title">Acesse abaixo os matériais desse módulo</span>
                        <div class="content-files">
                            <div>
                               <a href="arquivos teste/Teste1.docx" target="_blank">
                                    <img src="images/pdf-icon.svg" alt="Pdf">
                                </a> 
                            </div>
                            <div>   
                                <a href="arquivos teste/videoplayback.m4a" target="_blank">
                                    <img src="images/audiobook-icon.svg" alt="">
                                </a>  
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Módolo IV
                      </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <h2>
                            1º Período Seminário 01 ao 03 Ênfase ao Imaginário
                        </h2>
                        <p>
                            Os Quatro Períodos de Lacan
                        </p>
                        <p>
                            A obra de Jacques Lacan pode ser dividida em quatro períodos distintos, cada um marcado por uma ênfase específica na teoria psicanalítica, sempre articulados aos três registros: Real, Simbólico e Imaginário (RSI).
                        </p>
                        <ul>
                            <li>
                                <p>O Inconsciente > A Clínica do Inconsciente e os Fundamentos.</p>
                            </li>
                        </ul>
                        <span class="middle-title">Acesse abaixo os matériais desse módulo</span>
                        <div class="content-files">
                            <div>
                               <a href="arquivos teste/Teste1.docx" target="_blank">
                                    <img src="images/pdf-icon.svg" alt="Pdf">
                                </a> 
                            </div>
                            <div>   
                                <a href="arquivos teste/videoplayback.m4a" target="_blank">
                                    <img src="images/audiobook-icon.svg" alt="">
                                </a>  
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Módulo V
                      </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                         <h2>
                            2º Período Seminários 04 ao 08 Ênfase ao Simbólico 
                        </h2>
                        <p>
                            Os Quatro Períodos de Lacan
                        </p>
                        <p>
                            A obra de Jacques Lacan pode ser dividida em quatro períodos distintos, cada um marcado por uma ênfase específica na teoria psicanalítica, sempre articulados aos três registros: Real, Simbólico e Imaginário (RSI).
                        </p>
                        <ul>
                            <li>
                                <p>A Dialética do Desejo > o Desejo e Estruturação na Identificação com o Sintoma.</p>
                            </li>
                        </ul>
                        <span class="middle-title">Acesse abaixo os matériais desse módulo</span>
                        <div class="content-files">
                            <div>
                               <a href="arquivos teste/Teste1.docx" target="_blank">
                                    <img src="images/pdf-icon.svg" alt="Pdf">
                                </a> 
                            </div>
                            <div>   
                                <a href="arquivos teste/videoplayback.m4a" target="_blank">
                                    <img src="images/audiobook-icon.svg" alt="">
                                </a>  
                            </div>
                        </div> 
                      </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        Módulo VI
                      </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                         <h2>
                            3º Período Seminários 09 ao 20 Ênfase ao Real 
                        </h2>
                        <p>
                            Os Quatro Períodos de Lacan
                        </p>
                        <p>
                            A obra de Jacques Lacan pode ser dividida em quatro períodos distintos, cada um marcado por uma ênfase específica na teoria psicanalítica, sempre articulados aos três registros: Real, Simbólico e Imaginário (RSI).
                        </p>
                        <ul>
                            <li>
                                <p>A Clínica do Real > O Além do Édipo no Sujeito do Falasser. </p>
                            </li>
                        </ul>
                        <span class="middle-title">Acesse abaixo os matériais desse módulo</span>
                        <div class="content-files">
                            <div>
                               <a href="arquivos teste/Teste1.docx" target="_blank">
                                    <img src="images/pdf-icon.svg" alt="Pdf">
                                </a> 
                            </div>
                            <div>   
                                <a href="arquivos teste/videoplayback.m4a" target="_blank">
                                    <img src="images/audiobook-icon.svg" alt="">
                                </a>  
                            </div>
                        </div> 
                      </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        Módulo VII
                      </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                         <h2>
                            4º ou Último Período Seminários 21 ao 27 Ênfase ao nó Borromeano  
                        </h2>
                        <p>
                            Os Quatro Períodos de Lacan
                        </p>
                        <p>
                            A obra de Jacques Lacan pode ser dividida em quatro períodos distintos, cada um marcado por uma ênfase específica na teoria psicanalítica, sempre articulados aos três registros: Real, Simbólico e Imaginário (RSI).
                        </p>
                        <ul>
                            <li>
                                <p>O Corpo e o Gozo > O Corpo Pulsional e Gozo na sua Dimensão Não Fálica.</p>
                            </li>
                        </ul>
                        <span class="middle-title">Acesse abaixo os matériais desse módulo</span>
                        <div class="content-files">
                            <div>
                               <a href="arquivos teste/Teste1.docx" target="_blank">
                                    <img src="images/pdf-icon.svg" alt="Pdf">
                                </a> 
                            </div>
                            <div>   
                                <a href="arquivos teste/videoplayback.m4a" target="_blank">
                                    <img src="images/audiobook-icon.svg" alt="">
                                </a>  
                            </div>
                        </div> 
                      </div>
                    </div>
                </div>
            </div>
        </section>
            <p>
                <a href="logout.php">Sair</a>
            </p>
    </main>
    
</body>
<script src="app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
