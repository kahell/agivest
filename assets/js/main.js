;
(function() {

    var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #1e88e5}";
        document.body.appendChild(css);
    };

    'use strict';
    // iPad and iPod detection	
    var isiPad = function() {
        return (navigator.platform.indexOf("iPad") != -1);
    };

    var isiPhone = function() {
        return (
                (navigator.platform.indexOf("iPhone") != -1) ||
                (navigator.platform.indexOf("iPod") != -1)
                );
    };

    // Parallax
    var parallax = function() {
        $(window).stellar();
    };

    // Burger Menu
    var burgerMenu = function() {
        $('body').on('click', '.js-agivest-nav-toggle', function(event) {
            event.preventDefault();

            if ($('#navbar').is(':visible')) {
                $(this).removeClass('active');
            } else {
                $(this).addClass('active');
            }



        });

    };


    var testimonialCarousel = function() {
        var owl = $('.owl-carousel-fullwidth');
        owl.owlCarousel({
            items: 1,
            loop: true,
            margin: 0,
            responsiveClass: true,
            nav: false,
            dots: true,
            smartSpeed: 800,
            autoHeight: true,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut'
        });
    };

    // Page Nav
    var clickMenu = function() {

        $('#navbar a:not([class="external"])').click(function(event) {
            var section = $(this).data('nav-section'),
                    navbar = $('#navbar');

            if ($('[data-section="' + section + '"]').length) {
                $('html, body').animate({
                    scrollTop: $('[data-section="' + section + '"]').offset().top - 55
                }, 500);
            }

            if (navbar.is(':visible')) {
                navbar.removeClass('in');
                navbar.attr('aria-expanded', 'false');
                $('.js-agivest-nav-toggle').removeClass('active');
            }

            event.preventDefault();
            return false;
        });


    };

    // Reflect scrolling in navigation
    var navActive = function(section) {

        var $el = $('#navbar > ul');
        $el.find('li').removeClass('active');
        $el.each(function() {
            $(this).find('a[data-nav-section="' + section + '"]').closest('li').addClass('active');
        });

    };

    var navigationSection = function() {

        var $section = $('section[data-section]');

        $section.waypoint(function(direction) {

            if (direction === 'down') {
                navActive($(this.element).data('section'));
            }
        }, {
            offset: '150px'
        });

        $section.waypoint(function(direction) {
            if (direction === 'up') {
                navActive($(this.element).data('section'));
            }
        }, {
            offset: function() {
                return -$(this.element).height() + 155;
            }
        });

    };

    // Window Scrollt
    var windowScroll = function() {
        var lastScrollTop = 0;

        $(window).scroll(function(event) {

            var header = $('#agivest-header'),
                    scrlTop = $(this).scrollTop();

            if (scrlTop > 500 && scrlTop <= 2000) {
                header.addClass('navbar-fixed-top agivest-animated slideInDown');
            } else if (scrlTop <= 500) {
                if (header.hasClass('navbar-fixed-top')) {
                    header.addClass('navbar-fixed-top agivest-animated slideOutUp');
                    setTimeout(function() {
                        header.removeClass('navbar-fixed-top agivest-animated slideInDown slideOutUp');
                    }, 100);
                }
            }

        });
    };


    // Animations
    // Home
    var homeAnimate = function() {
        if ($('#agivest-home').length > 0) {

            $('#agivest-home').waypoint(function(direction) {

                if (direction === 'down' && !$(this.element).hasClass('animated')) {


                    setTimeout(function() {
                        $('#agivest-home .to-animate').each(function(k) {
                            var el = $(this);

                            setTimeout(function() {
                                el.addClass('fadeInUp animated');
                            }, k * 200, 'easeInOutExpo');

                        });
                    }, 200);


                    $(this.element).addClass('animated');

                }
            }, {offset: '80%'});

        }
    };

    var exploreAnimate = function() {

        var explore = $('#agivest-explore');
        if (explore.length > 0) {

            explore.waypoint(function(direction) {

                if (direction === 'down' && !$(this.element).hasClass('animated')) {


                    setTimeout(function() {
                        explore.find('.to-animate').each(function(k) {
                            var el = $(this);

                            setTimeout(function() {
                                el.addClass('fadeInUp animated');
                            }, k * 200, 'easeInOutExpo');

                        });
                    }, 200);

                    setTimeout(function() {
                        explore.find('.to-animate-2').each(function(k) {
                            var el = $(this);

                            setTimeout(function() {
                                el.addClass('bounceIn animated');
                            }, k * 200, 'easeInOutExpo');

                        });
                    }, 700);

                    setTimeout(function() {
                        explore.find('.to-animate-3').each(function(k) {
                            var el = $(this);

                            setTimeout(function() {
                                el.addClass('fadeInRight animated');
                            }, k * 200, 'easeInOutExpo');

                        });
                    }, 1000);


                    $(this.element).addClass('animated');

                }
            }, {offset: '80%'});

        }
    };

    var agivestwriter = function() {

        var explore = $('#agivest-writer');
        if (explore.length > 0) {

            explore.waypoint(function(direction) {

                if (direction === 'down' && !$(this.element).hasClass('animated')) {


                    setTimeout(function() {
                        explore.find('.to-animate').each(function(k) {
                            var el = $(this);

                            setTimeout(function() {
                                el.addClass('fadeInUp animated');
                            }, k * 200, 'easeInOutExpo');

                        });
                    }, 200);

                    setTimeout(function() {
                        explore.find('.to-animate-2').each(function(k) {
                            var el = $(this);

                            setTimeout(function() {
                                el.addClass('bounceIn animated');
                            }, k * 200, 'easeInOutExpo');

                        });
                    }, 700);

                    setTimeout(function() {
                        explore.find('.to-animate-3').each(function(k) {
                            var el = $(this);

                            setTimeout(function() {
                                el.addClass('fadeInRight animated');
                            }, k * 200, 'easeInOutExpo');

                        });
                    }, 1000);


                    $(this.element).addClass('animated');

                }
            }, {offset: '80%'});

        }
    };

    var testimonyAnimate = function() {
        var testimony = $('#agivest-testimony');
        if (testimony.length > 0) {

            testimony.waypoint(function(direction) {

                if (direction === 'down' && !$(this.element).hasClass('animated')) {


                    setTimeout(function() {
                        testimony.find('.to-animate').each(function(k) {
                            var el = $(this);

                            setTimeout(function() {
                                el.addClass('fadeInUp animated');
                            }, k * 200, 'easeInOutExpo');

                        });
                    }, 200);


                    $(this.element).addClass('animated');

                }
            }, {offset: '80%'});

        }
    };

    var gettingStartedAnimate = function() {
        var started = $('.getting-started-1');
        if (started.length > 0) {

            started.waypoint(function(direction) {

                if (direction === 'down' && !$(this.element).hasClass('animated')) {


                    setTimeout(function() {
                        started.find('.to-animate').each(function(k) {
                            var el = $(this);

                            setTimeout(function() {
                                el.addClass('fadeInUp animated');
                            }, k * 200, 'easeInOutExpo');

                        });
                    }, 200);

                    setTimeout(function() {
                        started.find('.to-animate-2').each(function(k) {
                            var el = $(this);

                            setTimeout(function() {
                                el.addClass('fadeInRight animated');
                            }, k * 200, 'easeInOutExpo');

                        });
                    }, 200);


                    $(this.element).addClass('animated');

                }
            }, {offset: '80%'});

        }
    };

    var gettingStarted2Animate = function() {
        var started = $('.getting-started-2');
        if (started.length > 0) {

            started.waypoint(function(direction) {

                if (direction === 'down' && !$(this.element).hasClass('animated')) {


                    setTimeout(function() {
                        started.find('.to-animate').each(function(k) {
                            var el = $(this);

                            setTimeout(function() {
                                el.addClass('fadeInUp animated');
                            }, k * 200, 'easeInOutExpo');

                        });
                    }, 200);

                    setTimeout(function() {
                        started.find('.to-animate-2').each(function(k) {
                            var el = $(this);

                            setTimeout(function() {
                                el.addClass('fadeInRight animated');
                            }, k * 200, 'easeInOutExpo');

                        });
                    }, 200);


                    $(this.element).addClass('animated');

                }
            }, {offset: '80%'});

        }
    };

    var pricingAnimate = function() {
        var pricing = $('#agivest-pricing');
        if (pricing.length > 0) {

            pricing.waypoint(function(direction) {

                if (direction === 'down' && !$(this.element).hasClass('animated')) {


                    setTimeout(function() {
                        pricing.find('.to-animate').each(function(k) {
                            var el = $(this);

                            setTimeout(function() {
                                el.addClass('fadeIn animated');
                            }, k * 200, 'easeInOutExpo');

                        });
                    }, 200);

                    setTimeout(function() {
                        pricing.find('.to-animate-2').each(function(k) {
                            var el = $(this);

                            setTimeout(function() {
                                el.addClass('fadeInUp animated');
                            }, k * 200, 'easeInOutExpo');

                        });
                    }, 200);


                    $(this.element).addClass('animated');

                }
            }, {offset: '80%'});

        }
    };


    var servicesAnimate = function() {
        var services = $('#agivest-services');
        if (services.length > 0) {

            services.waypoint(function(direction) {

                if (direction === 'down' && !$(this.element).hasClass('animated')) {


                    var sec = services.find('.to-animate').length,
                            sec = parseInt((sec * 200) + 400);

                    setTimeout(function() {
                        services.find('.to-animate').each(function(k) {
                            var el = $(this);

                            setTimeout(function() {
                                el.addClass('fadeInUp animated');
                            }, k * 200, 'easeInOutExpo');

                        });
                    }, 200);

                    setTimeout(function() {
                        services.find('.to-animate-2').each(function(k) {
                            var el = $(this);

                            setTimeout(function() {
                                el.addClass('bounceIn animated');
                            }, k * 200, 'easeInOutExpo');

                        });
                    }, sec);


                    $(this.element).addClass('animated');

                }
            }, {offset: '80%'});

        }
    };


    var teamAnimate = function() {
        var team = $('#agivest-team');
        if (team.length > 0) {

            team.waypoint(function(direction) {

                if (direction === 'down' && !$(this.element).hasClass('animated')) {

                    var sec = team.find('.to-animate').length,
                            sec = parseInt((sec * 200) + 400);

                    setTimeout(function() {
                        team.find('.to-animate').each(function(k) {
                            var el = $(this);

                            setTimeout(function() {
                                el.addClass('fadeIn animated');
                            }, k * 200, 'easeInOutExpo');

                        });
                    }, 200);

                    setTimeout(function() {
                        team.find('.to-animate-2').each(function(k) {
                            var el = $(this);

                            setTimeout(function() {
                                el.addClass('fadeInUp animated');
                            }, k * 200, 'easeInOutExpo');

                        });
                    }, sec);


                    $(this.element).addClass('animated');

                }
            }, {offset: '80%'});

        }
    };


    var faqAnimate = function() {
        var faq = $('#agivest-faq');
        if (faq.length > 0) {

            faq.waypoint(function(direction) {

                if (direction === 'down' && !$(this.element).hasClass('animated')) {

                    var sec = faq.find('.to-animate').length,
                            sec = parseInt((sec * 200) + 400);

                    setTimeout(function() {
                        faq.find('.to-animate').each(function(k) {
                            var el = $(this);

                            setTimeout(function() {
                                el.addClass('fadeIn animated');
                            }, k * 200, 'easeInOutExpo');

                        });
                    }, 200);

                    setTimeout(function() {
                        faq.find('.to-animate-2').each(function(k) {
                            var el = $(this);

                            setTimeout(function() {
                                el.addClass('fadeInUp animated');
                            }, k * 200, 'easeInOutExpo');

                        });
                    }, sec);


                    $(this.element).addClass('animated');

                }
            }, {offset: '80%'});

        }
    };

    var trustedAnimate = function() {
        var trusted = $('#agivest-trusted');
        if (trusted.length > 0) {

            trusted.waypoint(function(direction) {

                if (direction === 'down' && !$(this.element).hasClass('animated')) {

                    var sec = trusted.find('.to-animate').length,
                            sec = parseInt((sec * 200) + 400);

                    setTimeout(function() {
                        trusted.find('.to-animate').each(function(k) {
                            var el = $(this);

                            setTimeout(function() {
                                el.addClass('fadeIn animated');
                            }, k * 200, 'easeInOutExpo');

                        });
                    }, 200);

                    setTimeout(function() {
                        trusted.find('.to-animate-2').each(function(k) {
                            var el = $(this);

                            setTimeout(function() {
                                el.addClass('bounceIn animated');
                            }, k * 200, 'easeInOutExpo');

                        });
                    }, sec);


                    $(this.element).addClass('animated');

                }
            }, {offset: '80%'});

        }
    };


    var footerAnimate = function() {
        var footer = $('#agivest-footer');
        if (footer.length > 0) {

            footer.waypoint(function(direction) {

                if (direction === 'down' && !$(this.element).hasClass('animated')) {

                    setTimeout(function() {
                        footer.find('.to-animate').each(function(k) {
                            var el = $(this);

                            setTimeout(function() {
                                el.addClass('fadeIn animated');
                            }, k * 200, 'easeInOutExpo');

                        });
                    }, 200);


                    $(this.element).addClass('animated');

                }
            }, {offset: '80%'});

        }
    };

    var blogAnimate = function() {
        var footer = $('#agivest-blog');
        if (footer.length > 0) {

            footer.waypoint(function(direction) {

                if (direction === 'down' && !$(this.element).hasClass('animated')) {

                    setTimeout(function() {
                        footer.find('.to-animate').each(function(k) {
                            var el = $(this);

                            setTimeout(function() {
                                el.addClass('fadeIn animated');
                            }, k * 200, 'easeInOutExpo');

                        });
                    }, 200);


                    $(this.element).addClass('animated');

                }
            }, {offset: '80%'});

        }
    };

    var counter = function() {
        $('.js-counter').countTo({
            formatter: function(value, options) {
                return value.toFixed(options.decimals);
            },
        });
    };

    var counterWayPoint = function() {
        if ($('#agivest-counter-section').length > 0) {
            $('#agivest-counter-section').waypoint(function(direction) {

                if (direction === 'down' && !$(this.element).hasClass('animated')) {
                    setTimeout(counter, 400);
                    $(this.element).addClass('animated');

                }
            }, {offset: '90%'});
        }
    };

    var singlePoint = function(){
        !function(){var e,t,a=document,i=a.querySelectorAll(".js-accordionTrigger"),s="ontouchstart"in window,n="pointerdown"in window;skipClickDelay=function(e){e.preventDefault(),e.target.click()},setAriaAttr=function(e,t,a){e.setAttribute(t,a)},e=function(e,t,a){switch(a){case"true":setAriaAttr(e,"aria-expanded","true"),setAriaAttr(t,"aria-hidden","false");break;case"false":setAriaAttr(e,"aria-expanded","false"),setAriaAttr(t,"aria-hidden","true")}},t=function(t){console.log("triggered"),t.preventDefault();var a=t.target.parentNode.nextElementSibling,i=t.target;a.classList.contains("is-collapsed")?e(i,a,"true"):e(i,a,"false"),i.classList.toggle("is-collapsed"),i.classList.toggle("is-expanded"),a.classList.toggle("is-collapsed"),a.classList.toggle("is-expanded"),a.classList.toggle("animateIn")};for(var r=0,l=i.length;l>r;r++)s&&i[r].addEventListener("click",t,!1),n&&i[r].addEventListener("click",t,!1),i[r].addEventListener("click",t,!1)}();
    }

    // Document on load.
    $(function() {

        parallax();
        burgerMenu();
        //clickMenu();
        windowScroll();
        navigationSection();
        testimonialCarousel();

        // Animations
        homeAnimate();
        exploreAnimate();
        agivestwriter();
        testimonyAnimate();
        gettingStartedAnimate();
        gettingStarted2Animate();
        pricingAnimate();
        servicesAnimate();
        teamAnimate();
        faqAnimate();
        trustedAnimate();
        footerAnimate();
        blogAnimate();
        counter();
        counterWayPoint();

        // Single js
        singlePoint();

    });


}());