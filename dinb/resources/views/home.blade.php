@extends("base")
@section("content")

    <main class="cd-main">
        <ul class="cd-gallery">
            <li class="cd-item">
                <a href="{{url('item1')}}">
                    <div>
                        <h2>Site e-commerce et vitrine</h2>
                        <p>WordPress, Prestashop, Site Dynamique</p>
                        <b>en savoir plus</b>
                    </div>
                </a>
            </li>

            <li class="cd-item">
                <a class="dark-text" href="{{url('item2')}}">
                    <div>
                        <h2>Maintenance & refonte de site</h2>
                        <p>Besoin de changement ?</p>
                        <b>en savoir plus</b>
                    </div>
                </a>
            </li>

            <li class="cd-item">
                <a class="dark-text" href="{{url('item3')}}">
                    <div>
                        <h2>Payement et Suivit d'audiance</h2>
                        <p>Les meilleures solutions de payement et de suivit d'audience</p>
                        <b>en savoir plus</b>
                    </div>
                </a>
            </li>

            <li class="cd-item">
                <a href="{{url('item4')}}">
                    <div>
                        <h2>Hebergement & Referencement Web</h2>
                        <p>SEO et hebergement de site web</p>
                        <b>en savoir plus</b>
                    </div>
                </a>
            </li>
        </ul> <!-- .cd-gallery -->
    </main> <!-- .cd-main -->

    <div class="cd-folding-panel">

        <div class="fold-left"></div> <!-- this is the left fold -->

        <div class="fold-right"></div> <!-- this is the right fold -->

        <div class="cd-fold-content">
            <!-- content will be loaded using javascript -->
        </div>

        <a class="cd-close" href="#0"></a>
    </div> <!-- .cd-folding-panel -->

        <section class="row mx-0 border-top">
            <div class="d-flex flex-column align-items-center">
                <h2 class="mb-4 mt-4 text-blue-shadow mobile-title">Le processus d'accompagnement</h2>
                <p class="text-blue-shadow mx-4">Parce qu'il important de rester en phase avec votre projet, nous nous
                    astrenions à maintennir un service de qualité
                </p>
                <img src="img/fils-process.svg" alt="" style="width: 25em;">
            </div>
            <article
                class="col-12 bg-blue py-4 d-flex flex-column align-items-center justify-content-center text-light">
                <img src="img/Logo_DINA_without_back.svg" alt="">
                <h3 class="my-3 title-responsive">Pourquoi nous choisir ?</h3>
                <p class="whyChoose">Vous êtes artisan, auto-entrepreneur, fondateur d’une association ou chef d'entreprise ?
                    DINB
                    peut
                    créer rapidement pour vous un site web efficace qui apportera une plus-value à votre activité.
                    Notre spécialité est la conception de sites Web professionnels de type « vitrine » et « E-Commerce
                    ».
                </p>
            </article>

    </section>
@endsection
