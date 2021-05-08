@extends('layout.app', ["currentRoute" => "home"])

@section('body')

        <!-- Home -->

        <div class="home">

            
            <div class="home_background"></div>
            <div class="background_image background_city" style="background-image:url(images/city.png)"></div>
            <div class="cloud cloud_1"><img src="{{ asset('images/cloud.png') }}" alt=""></div>
            <div class="cloud cloud_2"><img src="{{ asset('images/cloud.png') }}" alt=""></div>
            <div class="cloud cloud_3"><img src="{{ asset('images/cloud_full.png') }}" alt=""></div>
            <div class="cloud cloud_4"><img src="{{ asset('images/cloud.png') }}" alt=""></div>
            <div class="home_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content text-center">
                                <div class="home_title">Encurte seus links</div>
                                <div class="home_text">Você pode encurtar facilmente seus link e ja compartilhar seus links
                                    livremente, de maneira rapida e pratica, vamos la?</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="domain_search_form_container justify-content-center">
                            <div class="col-5 alert d-none messageBox"></div>
                            <form action="{{ route('post.createShortUrl') }}" method="POST"
                                    class="domain_search_form d-flex flex-md-row flex-column align-items-center justify-content-start"
                                    id="domain_search_form" name="formShortUrl">
                                    @csrf
                                    <div class="d-flex flex-row align-items-center justify-content-start">
                                        <input type="text" value="" id="url" class="domain_search_input"
                                            placeholder="Informe seu link aqui" name="url">

                                        <button type="submit"
                                            class="domain_search_button d-flex flex-row align-items-center justify-content-center"><img
                                                src="images/search.png" alt="">Encurtar</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Intro -->

        <div class="intro">
            <div class="container">
                <div class="row">
                    <div class="col magic_fade_in">
                        <div class="section_title text-center">
                            <h2>Tenha mais controle sobre seus links</h2>
                        </div>
                    </div>
                </div>
                <div class="row intro_row">
                    <div class="intro_dots magic_fade_in" style="background-image:url(images/dots.png)"></div>

                    <!-- Intro Item -->
                    <div class="col-lg-4 intro_col magic_fade_in">
                        <div class="intro_item d-flex flex-column align-items-center justify-content-start text-center">
                            <div class="intro_icon_container d-flex flex-column align-items-center justify-content-center">
                                <div class="intro_icon"><img src="{{ asset('images/icon_1.svg') }}"
                                        alt="https://www.flaticon.com/authors/freepik"></div>
                            </div>
                            <div class="intro_item_content">
                                <div class="intro_item_title">Personalize seus links</div>
                                <div class="intro_item_text">
                                    <p>Crie links personalizados e divulgue seus seus sites, endereços de seus produtos, paginas de vendas
                                        com um link mais amigável.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Intro Item -->
                    <div class="col-lg-4 intro_col magic_fade_in">
                        <div class="intro_item d-flex flex-column align-items-center justify-content-start text-center">
                            <div class="intro_icon_container d-flex flex-column align-items-center justify-content-center">
                                <div class="intro_icon"><img src="{{ asset('images/icon_2.svg') }}"
                                        alt="https://www.flaticon.com/authors/freepik"></div>
                            </div>
                            <div class="intro_item_content">
                                <div class="intro_item_title">Estatisticas de acesso</div>
                                <div class="intro_item_text">
                                    <p>Tenha um maior controle sobre seus links encurtados onde saberá quantas pessoas acessaram sua página
                                        a partir do link encurtado.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Intro Item -->
                    <div class="col-lg-4 intro_col magic_fade_in">
                        <div class="intro_item d-flex flex-column align-items-center justify-content-start text-center">
                            <div class="intro_icon_container d-flex flex-column align-items-center justify-content-center">
                                <div class="intro_icon"><img src="{{ asset('images/icon_3.svg') }}"
                                        alt="https://www.flaticon.com/authors/freepik"></div>
                            </div>
                            <div class="intro_item_content">
                                <div class="intro_item_title">Utilize um domínio proprio</div>
                                <div class="intro_item_text">
                                    <p>Que tal utilizar seu proprio domínio para encurtar suas URLs. Legal neah!!! Venha conhecer também esta possibilidade.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col text-center">
                        <div class="intro_button text-center trans_200 ml-auto mr-auto"><a href="#">Assuma o controle
                                R$ 9.90/mês</a></div>
                    </div>
                </div>
            </div>
        </div>



    
@endsection

@section('javascript')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}",
            }
        });

    </script>
@endsection
