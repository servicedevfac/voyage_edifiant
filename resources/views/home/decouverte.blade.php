@extends('layouts.app')

@section('meta-title')
Découvertes & excursions | Voyage Édifiant Côte d’Ivoire
@endsection

@section('meta-description')
Partez à la découverte des plus beaux sites touristiques de Côte d'Ivoire avec Voyage Édifiant : circuits privés, culture, nature et aventure.
@endsection

@section('meta-keywords')
excursions Côte d'Ivoire, circuits touristiques, découvertes Abidjan, Voyage Édifiant
@endsection

@section('meta-image')
{{ asset('assets/front/images/hero-bg2.png') }}
@endsection


@section('content')

    <main>
      <div id="monCarrousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <!-- <div class="overlay"></div> -->
            <img src="{{ url('assets/front/images/hero-bg2.png')}}" class="d-block w-100" alt="Slide 1">
            <div class="carousel-captions">
              <h2 class="mb-4 secondary-text-white fs-1">Prépare-toi pour une aventure inoubliable au cœur d’un pays vibrant et coloré !</h2>
            </div>
          </div> 
        </div>
      </div>

      <section class="">
        <div class="container">
          <div class="title text-center m-t50">
            <h3 class="primary-text mb-3">Envie de visiter la Côte d’Ivoire</h3>
            <p class="text-leger">Envie de decouvrir la côte d’Ivoire nous vous montrons les villes qui font de lui un pays de renom</p>
          </div>
          
        </div>
      </section>

      <section class="">
            <div class="container">
                <p class="p-b30 why m-t40">
                    La Côte d’Ivoire est un joyau de l’Afrique de l’Ouest, un territoire riche d’histoires, de paysages contrastés, de peuples chaleureux et d’une culture vibrante. Des plages paisibles du Sud aux montagnes verdoyantes de l’Ouest, en passant par les villages traditionnels du Nord et les trésors architecturaux de Yamoussoukro, chaque région vous promet une aventure authentique. Mais on ne découvre pas un pays comme la Côte d’Ivoire en improvisant. Entre le choix des destinations, les moyens de transport, la sécurité, l’hébergement, les activités, les imprévus… organiser un voyage peut vite devenir un vrai casse-tête. C’est là qu’intervient Voyage Édifiant. Nous sommes bien plus qu’une agence : nous sommes des passionnés du territoire ivoirien, des artisans du voyage bien fait. Notre objectif est simple : vous faire vivre une expérience fluide, agréable et enrichissante, tout en vous connectant à la vraie Côte d’Ivoire. Nous sélectionnons les meilleures endroits, les prestataires les plus sérieux, les itinéraires les plus inspirants, et nous adaptons tout à vos envies et à votre budget. Que vous soyez un groupe de touristes venu de l’étranger, une entreprise en quête de déconnexion pour ses équipes, ou simplement un(e) ivoirien(ne) curieux(se) de mieux connaître son pays… vous êtes au bon endroit. Avec nous, chaque voyage est pensé dans les moindres détails pour allier plaisir, confort et découvertes. Vous n’avez qu’à faire vos valises. On s’occupe du reste. Explorez la Côte d’Ivoire autrement. Explorez-la avec Voyage Édifiant 
                </p>
                <div class="row gx-4 gy-5 m-t50 m-b300">
                    @foreach ($decouvertes as $decouverte)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="decouverte d-flex justify-content-center align-items-center" style="background-image: url('{{ url($decouverte->imageprincipale) }}'); background-size: cover; background-position: center;">
                                <div class="content">
                                <p class="text-center m-lr10">
                                    {!! Str::limit(strip_tags($decouverte->description), 200) !!}
                                </p>
                                <div class="text-center m-t30">
                                    <a href="{{ route('decouverteshow', $decouverte->slug) }}" class="secondary-btn ">Decouvrez la ville</a>
                                </div>
                                </div>
                            </div>
                        </div>


                        {{-- <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="decouverte d-flex justify-content-center align-items-center" style="background-image: url('{{ url($decouverte->imageprincipale) }}');">
                                <div class="content">
                                    <p class="text-center m-lr10">
                                        {!! $decouverte->description !!}
                                    </p>
                                    <div class="text-center m-t30">
                                        <a href="{{ route('decouverteshow', $decouverte->slug) }}" class="secondary-btn ">Decouvrez la ville</a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    @endforeach

                    
                    {{-- <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="decouverte d-flex justify-content-center align-items-center" style="background-image: url('{{ url('assets/front/images/waska-village-restaurant.jpg')}}');">
                            <div class="content">
                            <p class="text-center m-lr10">
                                L’immanquable Assinie est une destination paradisiaque lovée entre lagunes, lacs & océan. 
                                Profitez d’un calme et d‘une quiétude sans pareils. Cette cité verte est bordée par ses 
                                multiples atouts balnéaires et écologiques, où vous évader de la vie quotidienne pour 
                                des moments plus relaxants.
                            </p>
                            <div class="text-center m-t30">
                                <a href="cityDescribe.html" class="secondary-btn ">Decouvrez la ville</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="decouverte d-flex justify-content-center align-items-center" style="background-image: url('{{ url('assets/front/images/Melya-Plage-Jacqueville_1_BAAB.jpg')}}');">
                            <div class="content">
                            <p class="text-center m-lr10">
                                L’immanquable Assinie est une destination paradisiaque lovée entre lagunes, lacs & océan. 
                                Profitez d’un calme et d‘une quiétude sans pareils. Cette cité verte est bordée par ses 
                                multiples atouts balnéaires et écologiques, où vous évader de la vie quotidienne pour 
                                des moments plus relaxants.
                            </p>
                            <div class="text-center m-t30">
                                <a href="cityDescribe.html" class="secondary-btn ">Decouvrez la ville</a>
                            </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="decouverte d-flex justify-content-center align-items-center" style="background-image: url('{{ url('assets/front/images/un-havre-de-paix.jpg')}}');">
                            <div class="content">
                            <p class="text-center m-lr10">
                                L’immanquable Assinie est une destination paradisiaque lovée entre lagunes, lacs & océan. 
                                Profitez d’un calme et d‘une quiétude sans pareils. Cette cité verte est bordée par ses 
                                multiples atouts balnéaires et écologiques, où vous évader de la vie quotidienne pour 
                                des moments plus relaxants.
                            </p>
                            <div class="text-center m-t30">
                                <a href="cityDescribe.html" class="secondary-btn ">Decouvrez la ville</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="decouverte d-flex justify-content-center align-items-center" style="background-image: url('{{ url('assets/front/images/waska-village-restaurant.jpg')}}');">
                            <div class="content">
                            <p class="text-center m-lr10">
                                L’immanquable Assinie est une destination paradisiaque lovée entre lagunes, lacs & océan. 
                                Profitez d’un calme et d‘une quiétude sans pareils. Cette cité verte est bordée par ses 
                                multiples atouts balnéaires et écologiques, où vous évader de la vie quotidienne pour 
                                des moments plus relaxants.
                            </p>
                            <div class="text-center m-t30">
                                <a href="cityDescribe.html" class="secondary-btn ">Decouvrez la ville</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="decouverte d-flex justify-content-center align-items-center" style="background-image: url('{{ url('assets/front/images/Melya-Plage-Jacqueville_1_BAAB.jpg')}}');">
                            <div class="content">
                            <p class="text-center m-lr10">
                                L’immanquable Assinie est une destination paradisiaque lovée entre lagunes, lacs & océan. 
                                Profitez d’un calme et d‘une quiétude sans pareils. Cette cité verte est bordée par ses 
                                multiples atouts balnéaires et écologiques, où vous évader de la vie quotidienne pour 
                                des moments plus relaxants.
                            </p>
                            <div class="text-center m-t30">
                                <a href="cityDescribe.html" class="secondary-btn ">Decouvrez la ville</a>
                            </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
      </section>
    </main>


{{-- <div class="container">
    <h2>je suis la page decouverte</h2>
</div> --}}
@endsection