<?php

/**
 * Template Name: Filtro de lojas
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<!-- middle -->
<section class="middle">



    <!-- bloco Internal -->
    <div class="compre internal">
        <div class="row d-flex flex-wrap">

            <div class="col-lg-6 col-sm-6 col-xs-12 order-1 order-sm-0 description">
                <h1>Compre</h1>
                <h3>Descubra onde a Nupill está.</h3>
                <p>Compre na Kosmetic On-line ou procure o estabelecimento parceiro da Nupill mais próximo da sua casa.</p>

                <div class="block-loja">
                    <h3>Compre na loja virtual:</h3>
                    <p>
                        <a href="#">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail();
                            }
                            ?>
                        </a>
                    </p>

                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-xs-12 order-0 order-sm-1 image">
                <img src="images/compre.png" alt="Foto Notícia" />
            </div>

        </div>
        <!-- /bloco Internal -->


        <!-- bloco Form Local -->
        <div class="form-local description">
            <form name="form-local" action="" method="GET">
                <div class="row d-flex align-items-center justify-content-start justify-content-sm-center">
                    <h3 class="col-lg-12 col-sm-12 col-xs-12">Ou busque pela sua localização:</h3>
                    <!-- ***** -->
                    <!-- Não sei se vai usar type text ou select, fiz os dois exemplos -->
                    <!-- ***** -->
                    <div class="form-group col-lg-3 col-sm-6 col-xs-12">
                        <label for="estado">Estado</label>
                        <!--input type="text" name="estado" id="estado" class="form-control" required-->
                        <select class="form-control" id="estado">
                            <option value="">Selecione</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                        </select>
                    </div>

                    <div class="form-group col-lg-3 col-sm-6 col-xs-12">
                        <label for="cidade">Cidade</label>
                        <input type="text" name="cidade" id="cidade" class="form-control" required>
                    </div>

                    <div class="form-group col-lg-3 col-sm-6 col-xs-12">
                        <label for="bairro">Bairro</label>
                        <input type="text" name="Bairro" id="Bairro" class="form-control" required>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <input type="submit" class="form-control btn btn-blue" value="Buscar Loja">
                    </div>


                </div>

            </form>


            <!-- bloco news list -->
            <div class="local-list">
                <ul class="row">
                    <p class="col-lg-12">12 resultados encontrados:</p>
                    <!-- loop -->
                    <li class="col-lg-3 col-sm-3 col-xs-6">
                        <a href="#">
                            <h3>Boutique da Beleza</h3>
                            <p>São Paulo - SP <br />
                                Rua Exemplo, 123 - Aclimação <br />
                                (00) 3123-4567
                            </p>
                        </a>
                    </li>
                    <!-- /loop -->


                    <li class="col-lg-3 col-sm-3 col-xs-6">
                        <a href="#">
                            <h3>Boutique da Beleza</h3>
                            <p>São Paulo - SP <br />
                                Rua Exemplo, 123 - Aclimação <br />
                                (00) 3123-4567
                            </p>
                        </a>
                    </li>
                    <li class="col-lg-3 col-sm-3 col-xs-6">
                        <a href="#">
                            <h3>Boutique da Beleza</h3>
                            <p>São Paulo - SP <br />
                                Rua Exemplo, 123 - Aclimação <br />
                                (00) 3123-4567
                            </p>
                        </a>
                    </li>
                    <li class="col-lg-3 col-sm-3 col-xs-6">
                        <a href="#">
                            <h3>Boutique da Beleza</h3>
                            <p>São Paulo - SP <br />
                                Rua Exemplo, 123 - Aclimação <br />
                                (00) 3123-4567
                            </p>
                        </a>
                    </li>
                    <li class="col-lg-3 col-sm-3 col-xs-6">
                        <a href="#">
                            <h3>Boutique da Beleza</h3>
                            <p>São Paulo - SP <br />
                                Rua Exemplo, 123 - Aclimação <br />
                                (00) 3123-4567
                            </p>
                        </a>
                    </li>
                    <li class="col-lg-3 col-sm-3 col-xs-6">
                        <a href="#">
                            <h3>Boutique da Beleza</h3>
                            <p>São Paulo - SP <br />
                                Rua Exemplo, 123 - Aclimação <br />
                                (00) 3123-4567
                            </p>
                        </a>
                    </li>
                    <li class="col-lg-3 col-sm-3 col-xs-6">
                        <a href="#">
                            <h3>Boutique da Beleza</h3>
                            <p>São Paulo - SP <br />
                                Rua Exemplo, 123 - Aclimação <br />
                                (00) 3123-4567
                            </p>
                        </a>
                    </li>
                    <li class="col-lg-3 col-sm-3 col-xs-6">
                        <a href="#">
                            <h3>Boutique da Beleza</h3>
                            <p>São Paulo - SP <br />
                                Rua Exemplo, 123 - Aclimação <br />
                                (00) 3123-4567
                            </p>
                        </a>
                    </li>
                    <li class="col-lg-3 col-sm-3 col-xs-6">
                        <a href="#">
                            <h3>Boutique da Beleza</h3>
                            <p>São Paulo - SP <br />
                                Rua Exemplo, 123 - Aclimação <br />
                                (00) 3123-4567
                            </p>
                        </a>
                    </li>
                    <li class="col-lg-3 col-sm-3 col-xs-6">
                        <a href="#">
                            <h3>Boutique da Beleza</h3>
                            <p>São Paulo - SP <br />
                                Rua Exemplo, 123 - Aclimação <br />
                                (00) 3123-4567
                            </p>
                        </a>
                    </li>
                    <li class="col-lg-3 col-sm-3 col-xs-6">
                        <a href="#">
                            <h3>Boutique da Beleza</h3>
                            <p>São Paulo - SP <br />
                                Rua Exemplo, 123 - Aclimação <br />
                                (00) 3123-4567
                            </p>
                        </a>
                    </li>
                    <li class="col-lg-3 col-sm-3 col-xs-6">
                        <a href="#">
                            <h3>Boutique da Beleza</h3>
                            <p>São Paulo - SP <br />
                                Rua Exemplo, 123 - Aclimação <br />
                                (00) 3123-4567
                            </p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <!-- bloco Form Local -->

</section>
<!-- /middle -->

<?php get_footer(); ?>