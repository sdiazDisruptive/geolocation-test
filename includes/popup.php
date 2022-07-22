<!-- ============================================== -->
<!-- POPUP -->
<!-- ============================================== -->

<div id="popup" class="d-flex ai-center jc-center">
    <div class="popup-content rel">
        <div class="banner">
            <ul class="of-hidden">
                <?php foreach ($Popup_Images as $value): ?>
                <li>
                    <div class="grid jc-center ai-center">
                        <img class="popup-img" src="./images/popups/<?php echo $value; ?>.jpg" alt="">
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div id="popup-close" class="abs d-flex jc-center ai-center">X</div>
    </div>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
    <script>
        $(document).ready(function() {

            $('.banner ul').slick({
                autoplay:true,
                autoplaySpeed:4500,
                speed:600,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                dots:false,
                draggable:true,

                prevArrow:'<button class="slick-prev d-flex jc-center ai-center"></button>',
                nextArrow:'<button class="slick-next d-flex jc-center ai-center"></button>'
            });

        });
    </script>
</div>