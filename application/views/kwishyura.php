<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="assets/css/forms/switches.css">
    <link href="<?=base_url()?>assets/plugins/pricing-table/css/component.css" rel="stylesheet" type="text/css" />
    <div id="content" class="main-content">
            <div class="layout-px-spacing">
                

<div class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                          
                            <div class="widget-content widget-content-area">
                                <div class="container">
                                    <section class="pricing-section bg-5 mt-3">
                                        <div class="pricing pricing--norbu" style="flex-direction: row;">
                                            <div class="pricing__item">
                                                <h3 class="pricing__title">UMUTEKANO</h3>
                                                <p class="pricing__sentence">Umusanzu w'umutekano wishyurwa buri kwezi, ikiciro urimo usabwe kwishyura aya mafaranga</p>
                                                <div class="pricing__price"><span class="pricing__currency">Rwf</span><span id="result">2000</span><span class="pricing__period">/ UKWEZI</span></div>
                                                <form action="<?=base_url()?>family/payService" method="post" enctype="multipart/form-data">
                                                    <ul class="pricing__feature-list text-center" style="justify-content:left">
                                                        <center>
                                                            <input style="width:70%;" name="amezi" placeholder="Amezi wishyura" maxlength="2" class="form-control" id="Isuku"  min="1" max="12"  type="number" required>
                                                        </center>
                                                    </ul>
                                                    <input type="hidden" name="title" value="Umutekano">
                                                    <input type="hidden" name="table" value="umutekano">
                                                    <input type="hidden" name="amount" value="2000">
                                                    <input name="pay" class="btn btn-primary submit" type="submit" value="ISHYURA">
                                                </form>
                                            </div>

                                            <div class="pricing__item pricing__item--featured">
                                                <h3 class="pricing__title">ISUKU</h3>
                                                <p class="pricing__sentence">Umusanzu w'isuku wishyurwa buri kwezi, ikiciro urimo usabwe kwishyura aya mafaranga</p>
                                                <div class="pricing__price"><span class="pricing__currency">Rwf</span><span id="">3000</span><span class="pricing__period">/ UKWEZI</span></div>
                                                <form action="<?=base_url()?>family/payService" method="post" enctype="multipart/form-data">
                                                    <ul class="pricing__feature-list text-center" style="justify-content:left">
                                                        <center>
                                                            <input style="width:70%;" name="amezi" placeholder="Amezi wishyura" maxlength="2" class="form-control" id="Isuku"  min="1" max="12"  type="number" required>
                                                        </center>
                                                    </ul>
                                                    <input type="hidden" name="title" value="Isuku">
                                                    <input type="hidden" name="table" value="isuku">
                                                    <input type="hidden" name="amount" value="3000">
                                                    <input name="pay" class="btn btn-primary submit" type="submit" value="ISHYURA">
                                                </form>
                                            </div>

                                            <div class="pricing__item pricing__item--featured">
                                                <h3 class="pricing__title">Ejo heza</h3>
                                                <p class="pricing__sentence">Kwizigamira muri gahunda ya Ejo heza, biiratureba twese abaturarwanda</p>
                                                <div class="pricing__price"><span class="pricing__currency">Rwf</span><span id="isuku">1000</span><span class="pricing__period">/ UKWEZI</span></div>
                                                <form action="<?=base_url()?>family/payService" method="post" enctype="multipart/form-data">
                                                    <ul class="pricing__feature-list text-center" style="justify-content:left">
                                                        <center>
                                                            <input style="width:70%;" name="amezi" placeholder="Amezi wishyura" maxlength="2" class="form-control" id="Isuku"  min="1" max="12"  type="number" required>
                                                        </center>
                                                    </ul>
                                                    <input type="hidden" name="title" value="Ejo Heza">
                                                    <input type="hidden" name="table" value="ejoheza">
                                                    <input type="hidden" name="amount" value="1000">
                                                    <input name="pay" class="btn btn-primary submit" type="submit" value="ISHYURA">
                                                </form>
                                            </div>

                                            <div class="pricing__item">
                                                <h3 class="pricing__title">IGICERI</h3>
                                                <p class="pricing__sentence">Umusanzu w'igiceri porogaramu wishyurwa buri kwezi, wishyura amafaranga atari munsi ya</p>
                                                <div class="pricing__price"><span class="pricing__currency">Rwf</span><span id="igiceri">500</span><span class="pricing__period">/ UKWEZI</span></div>
                                                <form action="<?=base_url()?>family/payService" method="post" enctype="multipart/form-data">
                                                    <ul class="pricing__feature-list text-center" style="justify-content:left">
                                                        <center>
                                                            <input style="width:70%;" name="amezi" placeholder="Amezi wishyura" maxlength="2" class="form-control" id="Isuku"  min="1" max="12"  type="number" required>
                                                        </center>
                                                    </ul>
                                                    <input type="hidden" name="title" value="Igiceri">
                                                    <input type="hidden" name="table" value="igiceri">
                                                    <input type="hidden" name="amount" value="500">
                                                    <input name="pay" class="btn btn-primary submit" type="submit" value="ISHYURA">
                                                </form>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            </div>
                    </div>   </div>
                    </div>