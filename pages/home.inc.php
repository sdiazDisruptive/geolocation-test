<!-- ============================================== -->
<!-- HERO -->
<!-- ============================================== -->

<section>

    <div class="video-wrapper hero">
        <iframe src="https://player.vimeo.com/video/<?php echo $Conditions_Video_01; ?>&color=ffffff&portrait=0&autoplay=1&loop=1&autopause=0" 
            style="width:100%;height:auto;aspect-ratio:16/9" 
            frameborder="0" 
            allow="autoplay; fullscreen; picture-in-picture" 
            allowfullscreen></iframe>
        </div>
    </div>
    
</section>

<section class="hero">
    <div id="particles-js"></div>
    <div class="anchor" id="hero"></div>
    <div class="content-wrap d-flex ai-center">
        <div class="hero-content col-s50 col-s80-s">
            <svg class="hero-svg" xmlns="http://www.w3.org/2000/svg" width="171.5" height="164" viewBox="0 0 171.5 164"><path id="empty_square" d="M2,77V2H169.5V162h-84"/></svg>
            <h2 class="h1"><?php echo $Hero_Title; ?></h2>
            <p class="hero-text fs-l"><?php echo $Hero_Text; ?></p>
            <div class="img-wrap arrow-icon">
                <img src="./images/icons/arrow_down.svg" alt="">
            </div>
        </div>
    </div>
</section>

<section id="cards-icon">
    <div class="content-wrap-s d-flex wrap jc-between">
        <div class="card-icon col-s30 col-s40-m col-s80-s box-shadow">
            <div class="img-wrap card-icon-img"><img src="./images/icons/ahorra.svg" alt=""></div>
            <p class="card-icon-text color-text"><?php echo $Card_Icon_1; ?></p>
        </div>
        <div class="card-icon col-s30 col-s40-m col-s80-s box-shadow">
            <div class="img-wrap card-icon-img"><img src="./images/icons/aumenta.svg" alt=""></div>
            <p class="card-icon-text color-text"><?php echo $Card_Icon_2; ?></p>
        </div>
        <div class="card-icon col-s30 col-s40-m col-s80-s box-shadow">
            <div class="img-wrap card-icon-img"><img src="./images/icons/plan.svg" alt=""></div>
            <p class="card-icon-text color-text"><?php echo $Card_Icon_3; ?></p>
        </div>
    </div>
</section>

<section>
    <div class="block-content">
        <div class="video-grid">
            <div class="video">
                <div class="video-local" data-code="<?php echo $Conditions_Video_02; ?>">
                    <a href="javascript:void(0)" class="view">
                        <div class="bg-overlay soft"></div>
                        <img class="lozad" data-src="./images/body/finance.jpg" />
                     </a>
                </div>
            </div>
            <div class="video">
                <div class="video-local" data-code="<?php echo $Conditions_Video_03; ?>">
                    <a href="javascript:void(0)" class="view">
                        <div class="bg-overlay soft"></div>
                        <img class="lozad" data-src="./images/body/life.jpg" />
                     </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================== -->
<!-- BONDS -->
<!-- ============================================== -->

<section class="bonds">
    <div class="anchor" id="bonds"></div>
    <div class="content-wrap-s">
        <div class="bonds-type col-s90 d-flex jc-between ai-center">


            <div class="col-s40 col-s45-m col-s100-s">
                <article class="bonds-type--card box-shadow d-flex">
                    <div class="bonds-type--card-img img-wrap">
                        <img src="./images/body/daily.png" alt="Daily">
                    </div>
                    <div>
                        <h3 class="bonds-type--card-title color-title h3"><?php echo $Bond_Type_1_Title; ?></h3>
                        <p class="bonds-type--card-text color-text"><?php echo $Bond_Type_1_Text; ?></p>
                    </div>
                </article>

                <article class="bonds-type--card box-shadow d-flex">
                    <div class="bonds-type--card-img img-wrap">
                        <img src="./images/body/fast_start.png" alt="Fast Start">
                    </div>
                    <div>
                        <h3 class="bonds-type--card-title color-title h3"><?php echo $Bond_Type_2_Title; ?></h3>
                        <p class="bonds-type--card-text color-text"><?php echo $Bond_Type_2_Text; ?></p>
                    </div>
                </article>

                <article class="bonds-type--card box-shadow d-flex">
                    <div class="bonds-type--card-img img-wrap">
                        <img src="./images/body/matrix.png" alt="Matrix">
                    </div>
                    <div>
                        <h3 class="bonds-type--card-title color-title h3"><?php echo $Bond_Type_3_Title; ?></h3>
                        <p class="bonds-type--card-text color-text"><?php echo $Bond_Type_3_Text; ?></p>
                    </div>
                </article>
            </div>


            <div class="bonds-content col-s50 col-s100-s">
                <h2 class="bonds-content-title h2 color-title"><?php echo $Bonds_Title; ?></h2>
                <p class="bonds-content-text color-text"><?php echo $Bonds_Text; ?></p>
                <a href="https://my.cryptocnl.com/join/<?php echo $_SESSION['user_replica']; ?>?locale=<?php echo $Conditions_Language; ?>" class="nav-btn button"><?php echo $Bonds_Button; ?></a>
            </div>


        </div>


        <div class="levels">
        <center>
            <p class="levels-subtitle color-title"><?php echo $Level_Subtitle; ?></p>
            <h2 class="levels-title  h2 color-title"><?php echo $Level_Title; ?> 1%</h2>
        </center>

            <div class="d-flex jc-center ">
                <img src="./images/body/unilevel.svg" style="width: 80%;">
                <!--<article class="levels-card d-flex jc-between ai-center box-shadow">
                    <h3 class="h3 color-text"><?php echo $Level_1_Title; ?></h3>
                    <p class="levels-percentage"><?php echo $Level_1_Percentage; ?></p>
                </article>

                <article class="levels-card d-flex jc-between ai-center box-shadow">
                    <h3 class="h3 color-text"><?php echo $Level_2_Title; ?></h3>
                    <p class="levels-percentage"><?php echo $Level_2_Percentage; ?></p>
                </article>

                <article class="levels-card d-flex jc-between ai-center box-shadow">
                    <h3 class="h3 color-text"><?php echo $Level_3_Title; ?></h3>
                    <p class="levels-percentage"><?php echo $Level_3_Percentage; ?></p>
                </article>

                <article class="levels-card d-flex jc-between ai-center box-shadow">
                    <h3 class="h3 color-text"><?php echo $Level_4_Title; ?></h3>
                    <p class="levels-percentage"><?php echo $Level_4_Percentage; ?></p>
                </article>

                <article class="levels-card d-flex jc-between ai-center box-shadow">
                    <h3 class="h3 color-text"><?php echo $Level_5_Title; ?></h3>
                    <p class="levels-percentage"><?php echo $Level_5_Percentage; ?></p>
                </article>

                <article class="levels-card d-flex jc-between ai-center box-shadow">
                    <h3 class="h3 color-text"><?php echo $Level_6_Title; ?></h3>
                    <p class="levels-percentage"><?php echo $Level_6_Percentage; ?></p>
                </article>

                <article class="levels-card d-flex jc-between ai-center box-shadow">
                    <h3 class="h3 color-text"><?php echo $Level_7_Title; ?></h3>
                    <p class="levels-percentage"><?php echo $Level_7_Percentage; ?></p>
                </article>

                <article class="levels-card d-flex jc-between ai-center box-shadow">
                    <h3 class="h3 color-text"><?php echo $Level_8_Title; ?></h3>
                    <p class="levels-percentage"><?php echo $Level_8_Percentage; ?></p>
                </article>

                <article class="levels-card d-flex jc-between ai-center box-shadow">
                    <h3 class="h3 color-text"><?php echo $Level_9_Title; ?></h3>
                    <p class="levels-percentage"><?php echo $Level_9_Percentage; ?></p>
                </article>-->
            </div>

        </div>


    </div>
</section>

<!-- ============================================== -->
<!-- PLANS -->
<!-- ============================================== -->

<section class="plans bg-blue">
    <div class="anchor" id="plans"></div>
    <div class="plans-img-bg"></div>


    <div class="plans-bubble">
        <h2 class="plans-bubble-title fs-l"><?php echo $Bubble_Title; ?></h2>
        <p class="plans-bubble-text"><?php echo $Bubble_Text; ?></p>
    </div>

    <div class="glow"></div>


    <div class="plans-grid content-wrap-s d-flex wrap jc-center">
        <a href="https://my.cryptocnl.com/join/<?php echo $_SESSION['user_replica']; ?>?locale=<?php echo $Conditions_Language; ?>" class="plans-card d-grid box-shadow ai-center">
            <div class="plans-card--yellow"></div>
            <div class="plans-card--img img-wrap"><img src="./images/body/50.png" alt="50 USD"></div>
            <div class="plans-card--content d-flex dir-column jc-center">
                <p class="plans-card--text"><?php echo $Plan_Title; ?></p>
                <p class="plans-card--price bold fs-m"><span class="amount h2"><?php echo $Plan_1_Amount; ?></span> <?php echo $Plan_Currency; ?></p>
            </div>
        </a>

        <a href="https://my.cryptocnl.com/join/<?php echo $_SESSION['user_replica']; ?>?locale=<?php echo $Conditions_Language; ?>" class="plans-card d-grid box-shadow ai-center">
            <div class="plans-card--yellow"></div>
            <div class="plans-card--img img-wrap"><img src="./images/body/100.png" alt="100 USD"></div>
            <div class="plans-card--content d-flex dir-column jc-center">
                <p class="plans-card--text"><?php echo $Plan_Title; ?></p>
                <p class="plans-card--price bold fs-m"><span class="amount h2"><?php echo $Plan_2_Amount; ?></span> <?php echo $Plan_Currency; ?></p>
            </div>
        </a>

        <a href="https://my.cryptocnl.com/join/<?php echo $_SESSION['user_replica']; ?>?locale=<?php echo $Conditions_Language; ?>" class="plans-card d-grid box-shadow ai-center">
            <div class="plans-card--yellow"></div>
            <div class="plans-card--img img-wrap"><img src="./images/body/300.png" alt="300 USD"></div>
            <div class="plans-card--content d-flex dir-column jc-center">
                <p class="plans-card--text"><?php echo $Plan_Title; ?></p>
                <p class="plans-card--price bold fs-m"><span class="amount h2"><?php echo $Plan_3_Amount; ?></span> <?php echo $Plan_Currency; ?></p>
            </div>
        </a>

        <a href="https://my.cryptocnl.com/join/<?php echo $_SESSION['user_replica']; ?>?locale=<?php echo $Conditions_Language; ?>" class="plans-card d-grid box-shadow ai-center">
            <div class="plans-card--yellow"></div>
            <div class="plans-card--img img-wrap"><img src="./images/body/500.png" alt="500 USD"></div>
            <div class="plans-card--content d-flex dir-column jc-center">
                <p class="plans-card--text"><?php echo $Plan_Title; ?></p>
                <p class="plans-card--price bold fs-m"><span class="amount h2"><?php echo $Plan_4_Amount; ?></span> <?php echo $Plan_Currency; ?></p>
            </div>
        </a>

        <a href="https://my.cryptocnl.com/join/<?php echo $_SESSION['user_replica']; ?>?locale=<?php echo $Conditions_Language; ?>" class="plans-card d-grid box-shadow ai-center">
            <div class="plans-card--yellow"></div>
            <div class="plans-card--img img-wrap"><img src="./images/body/1000.png" alt="1000 USD"></div>
            <div class="plans-card--content d-flex dir-column jc-center">
                <p class="plans-card--text"><?php echo $Plan_Title; ?></p>
                <p class="plans-card--price bold fs-m"><span class="amount fs-l"><?php echo $Plan_5_Amount; ?></span> <?php echo $Plan_Currency; ?></p>
            </div>
        </a>

        <a href="https://my.cryptocnl.com/join/<?php echo $_SESSION['user_replica']; ?>?locale=<?php echo $Conditions_Language; ?>" class="plans-card d-grid box-shadow ai-center">
            <div class="plans-card--yellow"></div>
            <div class="plans-card--img img-wrap"><img src="./images/body/2500.png" alt="2500 USD"></div>
            <div class="plans-card--content d-flex dir-column jc-center">
                <p class="plans-card--text"><?php echo $Plan_Title; ?></p>
                <p class="plans-card--price bold fs-m"><span class="amount fs-l"><?php echo $Plan_6_Amount; ?></span> <?php echo $Plan_Currency; ?></p>
            </div>
        </a>

        <a href="https://my.cryptocnl.com/join/<?php echo $_SESSION['user_replica']; ?>?locale=<?php echo $Conditions_Language; ?>" class="plans-card d-grid box-shadow ai-center">
            <div class="plans-card--yellow"></div>
            <div class="plans-card--img img-wrap"><img src="./images/body/5000.png" alt="5000 USD"></div>
            <div class="plans-card--content d-flex dir-column jc-center">
                <p class="plans-card--text"><?php echo $Plan_Title; ?></p>
                <p class="plans-card--price bold fs-m"><span class="amount fs-l"><?php echo $Plan_7_Amount; ?></span> <?php echo $Plan_Currency; ?></p>
            </div>
        </a>
    </div>


    <div class="content-wrap-s">
        <p class="plans-text fs-l"><?php echo $Plans_Text; ?></p>
    </div>

    <div class="wallet content-wrap d-flex wrap jc-between ai-center">
        <div class="img-wrap col-s50 col-s100-s"><img src="./images/body/app_screen.png" alt=""></div>
        <div class="col-s40 col-s45-m col-s100-s">
            <div class="img-wrap arrow-icon"><img src="./images/icons/arrow_left.svg" alt=""></div>
            <p class="wallet-subtitle"><?php echo $Wallet_Subtitle; ?></p>
            <p class="wallet-text fs-m"><?php echo $Wallet_Text; ?></p>
            <a href="https://my.cryptocnl.com/join/<?php echo $_SESSION['user_replica']; ?>?locale=<?php echo $Conditions_Language; ?>" class="nav-btn button"><?php echo $Wallet_Button; ?></a>
        </div>
    </div>

    <div class="wallet-lines img-wrap"></div>
</section>