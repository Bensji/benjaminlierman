benj.globalJs =
    {
        init: function () {
            benj.globalJs.showTyper();
            benj.globalJs.hideNavOnScroll();
        },

        showTyper: function () {
            Typed.new('.element', {
                strings: [
                    "<b>is</b> een creatief bureau uit Poperinge. ",
                    "^500 bedenkt creatieve campagnes. Deze zijn onderbouwd en vernieuwend. ",
                    "<b>is ook ...</b> ^700 een naam. ",
                    "helpt meedenken met je bedrijf. ",
                    "<b>is</b> geen nerd. ^1000 Ok, misschien een beetje! ",
                    "is binnenkort zelf aanwezig op het web! ^200 De ironie! "

                ],
                typeSpeed: 0,
                startDelay: 700,
                backDelay: 4000,
                loop: true,
                contentType: 'html'
            });
        },

        hideNavOnScroll: function () {
            // Hide Header on on scroll down
            var didScroll;
            var lastScrollTop = 0;
            var delta = 10;
            var navbarHeight = 100;
            var item = $('#top-nav');

            $(window).scroll(function (event) {
                didScroll = true;
            });

            setInterval(function () {
                if (didScroll) {
                    hasScrolled();
                    didScroll = false;
                }
            }, 250);

            function hasScrolled() {
                var st = document.body.scrollTop;

                // Make sure they scroll more than delta
                if (Math.abs(lastScrollTop - st) <= delta)
                    return;

                // If they scrolled down and are past the navbar, add class .nav-up.
                // This is necessary so you never see what is "behind" the navbar.
                if (st > lastScrollTop && st > navbarHeight) {
                    item.removeClass('nav-down').addClass('nav-up');
                } else {
                    // Scroll Up
                    if (st + $(window).height() < $(document).height()) {
                        item.removeClass('nav-up').addClass('nav-down');
                    }
                }

                lastScrollTop = st;
            }
        }
    };