/* ============================================== */
/* PRELOADER */
/* ============================================== */

$(window).load(function() {
    $('.preloader').delay(500).fadeOut('fast');
});

/* ============================================== */
/* MOBILE MENU AND NAV */
/* ============================================== */

var navBtn = document.getElementsByClassName("menu-bars");
var navPanel = document.getElementById("nav-primary");

for(let i=0;i<navBtn.length;i++){
    navBtn[i].addEventListener("click", function(){
        navBtn[i].classList.toggle("active");
        navPanel.classList.toggle("active");
    });
}
$("#nav-primary a").click(function(){
    navPanel.classList.remove("active");
    for(let i=0;i<navBtn.length;i++){
        navBtn[i].classList.remove("active");
    }
});

/* ============================================== */
/* VIDEO YOUTUBE */
/* ============================================== */

$(document).ready(function() {

    $('.video .video-local').each(function() {
        var code = $(this).attr('data-code');
        $(this).click( function(){
        $('body').append(`
            <div class="popup-video">
                <iframe src="https://player.vimeo.com/video/${code}&color=ffffff&portrait=0" 
                    style="position:absolute;width:60%;height:60%;" 
                    frameborder="0" 
                    allow="autoplay; fullscreen; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>`);
            $('.popup-video').click( function(){
            $('div.popup-video').remove();
            });
        });
    });

});

/* ============================================== */
/* PARTICLES */
/* ============================================== */

particlesJS("particles-js", {
    particles: {
        number: {
            value: 50,
            density: {
                enable: true,
                value_area: 1200
            }
        },
        color: {
            value: "#008DFF"
        },
        shape: {
            type: "circle",
            polygon: {
                nb_sides: 30
            }
        },
        size: {
            value: 3,
            random: true,
            anim: {
                enable: false,
                speed: 10,
                size_min: 0.1,
                sync: false
            }
        },
        line_linked: {
            enable: true,
            distance: 150,
            color: "#008DFF",
            opacity: 0.4,
            width: 1
        },
        move: {
            enable: true,
            speed: 6,
            direction: "none",
            random: false,
            straight: false,
            out_mode: "out",
            bounce: false,
            attract: {
                enable: false,
                rotateX: 600,
                rotateY: 1200
            }
        }
    },
    retina_detect: true
});

/* ============================================== */
/* ACTIVE MENU ITEM ON SCROLL */
/* ============================================== */

$(document).ready(function () {

    var sections = $('.anchor')
    , nav = $('.header')
    , nav_height = nav.outerHeight();

    //Change header bg-color on load
    if(window.scrollY > 10) {
        document.getElementsByClassName("header")[0].classList.add("add-bg");
    } else {
        document.getElementsByClassName("header")[0].classList.remove("add-bg");
    }

    $(window).on('scroll', function () {
        var cur_pos = $(this).scrollTop();
        var section_space;

        //Change header bg-color on scroll
        if(this.scrollY > 10) {
            document.getElementsByClassName("header")[0].classList.add("add-bg");
        } else {
            document.getElementsByClassName("header")[0].classList.remove("add-bg");
        }

        //Height of the header
        if ($(window).width() > 1260) {
            section_space = 73;
        }
        else {
            section_space = 56;
        }
        
        //Change item-nav color on scroll
        sections.each(function() {
            var top = $(this).parent().offset().top - nav_height,
                bottom = top + $(this).parent().outerHeight();

            if (cur_pos >= top && cur_pos <= bottom) {
                nav.find('a.nav-item').removeClass('active');
                sections.removeClass('active');
            
                $(this).addClass('active');
                nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
            }

        });
    });


});
/* ============================================== */
/* LAZY-LOAD */
/* ============================================== */
const observer = lozad();
observer.observe();

/* ============================================== */
/* POPUP */
/* ============================================== */

const popup = document.getElementById("popup")
const close = document.getElementById("popup-close")

if(popup){
    close.addEventListener("click", () => popup.classList.add("close"))

    let tabs = document.querySelectorAll('.tab')
    let tabsContent = document.querySelectorAll('.popup-img')
    tabs.forEach(tab => {
        tab.addEventListener('click', e => {
            const contentId = `tcont-${e.target.dataset.content}`;
            
            tabs.forEach(siblings => {
                siblings.classList.remove('active')
            })
            e.target.classList.add('active')
            
            tabsContent.forEach(cont => {
                cont.classList.remove('active')
            })
            document.getElementById(contentId).classList.add('active')
        })
    })
}

const coinmama = document.getElementById("coinmama")
const coinops = document.getElementById("coinmama-ops")
coinmama.addEventListener("click", () => coinops.classList.toggle("active"))


/* ============================================== */
/* BUTTON-MENU */
/* ============================================== */

function myFunction() {
    document.getElementById("button-menu").classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target.matches('.language')) {
    var dropdowns = document.getElementsByClassName("button-menu-close");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
        }
    }
    }
}