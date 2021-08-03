<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="icon" href="{{url('img/logo.png')}}">
    <title>Accceuil - Developpement Idée Numerique & Buissness</title>
</head>

<body>

<div class="bg-main">
    <header>
        <nav class="navbar flex-nowrap navbar-expand-lg navbar-light bg-transparent ">
            <div class="container-fluid">
                <a class="navbar-brand text-dark fs-2" href="home.blade.php">
                    <img src="{{url('img/Logo_DINA.svg')}}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup"
                        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav mx-md-2 fs-5">
                        <a class="nav-link nav-mod" href="{{url('home')}}">Accceuil</a>
                        <a class="nav-link nav-mod" href="{{url('realisation')}}">Réaslisation</a>
                        <a class="nav-link nav-mod" href="{{url('equipe')}}">Tarification</a>
                        <a class="nav-link nav-mod" href="{{url('contact')}}">Contact</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="text-dark col-md-6 mx-0 col-8 mt-md-4 bg-text-bg-main">
        <h1 class="mx-2 text-blue-shadow">Creation site design dans le secteur Valentinois</h1>
        <p class="mx-4 my-3 ">Vous êtes artisan, auto-entrepreneur, fondateur d’une association ou chef d'entreprise ?
            DINB peut
            créer
            rapidement pour vous un site web efficace qui apportera une plus-value à votre activité.
            Notre spécialité est la conception de sites Web professionnels de type « vitrine » et « E-Commerce ».
        </p>
        <a href="/realisation.html" class="btn-mod">
            <span class="btn-contact text-light">Nous-contacter</span>
        </a>
    </div>
</div>


@yield("content")


<footer class="footer-area footer--light">
    <div class="footer-big">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col">
                    <div class="footer-widget">
                        <div class="widget-about">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d45211.44184994124!2d4.92898781262209!3d44.9087910519916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1612058729604!5m2!1sfr!2sfr"
                                width="300" height="250" frameborder="0" style="border:0;" allowfullscreen=""
                                aria-hidden="false"
                                tabindex="0" class="">
                            </iframe>
                            <p>Situé dans la région Rhone-Alpes,dans le bassin Valentinois
                            </p>
                            <ul class="contact-details">
                                <li>
                                    <span class="icon-earphones"></span> Appeler-Nous :
                                    <a href="tel:344-755-111">07 71 12 17 62</a>
                                </li>
                                <li>
                                    <span class="icon-envelope-open"></span>
                                    <a href="mailto:pro.aperriolat@gmail.com">pro.aperriolat@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-4">
                    <div class="footer-widget">
                        <div class="footer-menu">
                            <h4 class="footer-widget-title">Our Company</h4>
                            <ul>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">How It Works</a>
                                </li>
                                <li>
                                    <a href="#">Affiliates</a>
                                </li>
                                <li>
                                    <a href="#">Testimonials</a>
                                </li>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#">Plan &amp; Pricing</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mini-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright-text">
                            <p>© 2018
                                <a href="#">DigiPro</a>. All rights reserved. Created by
                                <a href="#">AazzTech</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
        crossorigin="anonymous"></script>


</html>
