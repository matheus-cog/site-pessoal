<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/Styles.css">
        <link rel="stylesheet" href="assets/img/fontawesome/css/all.min.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="assets/vendor/sweetalert2/dist/sweetalert2.min.css">
        
        <link rel="icon" type="image/png" href="assets/img/favicon.ico"/>
        <title>Matheus G.</title>
    </head>
    <body>
        <!-- Cabeçalho -->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo"><img src="assets/img/favicon.ico" width="28" height="28"></a>
                </div>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link">Home</a></li>
                        <li class="nav__item"><a href="#sobre" class="nav__link">Sobre</a></li>
                        <li class="nav__item"><a href="#habilidades" class="nav__link">Habilidades</a></li>
                        <li class="nav__item"><a href="#projetos" class="nav__link">Projetos</a></li>
                        <li class="nav__item"><a href="#contato" class="nav__link">Contato</a></li>
                    </ul>
                </div>
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu' style='color:#ffffff'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">

            <!-- Home -->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Olá,<br>Me chamo <span class="home__title-color">Matheus</span><span class="home__title">.</span><br>Sou desenvolvedor.</h1>
                    <a href="#contato" class="button">Contato</a>
                </div>
                <div class="home__social">
                    <a href="https://www.linkedin.com/in/matheus-cog" class="home__social-icon"><i class="bx bxl-linkedin"></i></a>
                    <a href="https://github.com/matheus-cog" class="home__social-icon"><i class="bx bxl-github"></i></a>
                </div>
                <div class="home__img">
                    <img src="assets/img/perfil.png" alt="">
                </div>
            </section>

            <!-- Sobre -->
            <section class="about section" id="sobre">
                <h2 class="section-title">Sobre</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/sobre.jpg" alt="">
                    </div>
                    <div>
                        <h2 class="about__subtitle">É um prazer ter você por aqui.</h2>
                        <p class="about__text">Meu nome é Matheus Guedes e sou desenvolvedor de software. Deus, T.I e música são as palavras que mais estão presentes no meu dia a dia. Costumo a trabalhar com aplicações Android, Java, C# e PHP. Então, se tiver algo em que possa te ajudar, é só enviar uma mensagem rolando a página até o final.</p>
                    </div>
                </div>
            </section>

            <!-- Habilidades -->
            <section class="skills section">
                <h2 class="section-title" id="habilidades">Habilidades</h2>

                <div class="skills_container bd-grid">
                    <div>
                        <h2 class="skills__subtitle">Code skills</h2>
                        <p class="skills__text">Foco em desenvolvimento mobile para Android (com Java, e PHP para interações web), Java e C#.</p>
                        
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='fab fa-android skills__icon'></i>
                                <span class="skills__name">Android</span>
                            </div>
                            <div class="skills__bar skills__android">

                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='fab fa-java skills__icon'></i>
                                <span class="skills__name">Java</span>
                            </div>
                            <div class="skills__bar skills__java">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">80%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='skills__icon'>C#</i>
                                <span class="skills__name">C#</span>
                            </div>
                            <div class="skills__bar skills__csharp">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">75%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='fab fa-php skills__icon'></i>
                                <span class="skills__name">PHP</span>
                            </div>
                            <div class="skills__bar skills__php">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">70%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Projetos -->
            <section class="work section" id="projetos">
                <h2 class="section-title">Projetos</h2>

                <div class="work__container bd-grid">
                    <div class="work__img">
                        <img src="assets/img/projeto1111.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/projeto222.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/projeto33333.jpg" alt="">
                    </div>
                </div>
            </section>

            <!-- Contato -->
            <section class="contact section" id="contato">
                <h2 class="section-title">Contato</h2>

                <div class="contact__container bd-grid">
                    <form id="enviar_email" class="contact__form">
                        <input type="text" required="required" placeholder="Nome" id="nome" name="nome" class="contact__input">
                        <input type="mail" required="required" placeholder="E-mail" id="email" name="email" class="contact__input">
                        <textarea placeholder="Mensagem" required="required" id="mensagem" name="mensagem" cols="0" rows="10" class="contact__input"></textarea>
                        <button type="submit" name="btnEnviar" class="contact__button button">Enviar</button>
                    </form>
                </div>
            </section>
        </main>

        <!-- Rodapé -->
        <footer class="footer">
            <p>Matheus Campos de O. Guedes</p>
        </footer>

        <!-- Scripts -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="assets/js/Script.js"></script>
        <script src="assets/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
    </body>
    
</html>