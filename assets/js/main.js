; (function () {

    const icons = document.querySelectorAll('.icons');
    const github = document.querySelector('.github');
    const story = $('.story');
    const resume = $('#resume');
    const homeBtn = $('.home');
    const resumeBtn = $('.resume');
    const nav = document.querySelector('nav');
    const menu = $('.menu');
    const menuBar = $('.menu-bar');
    let menuToggle = false;
    const navLinks = document.querySelectorAll('.menu a');
    const thumbnailContainer = $('.thumbnails');
    const bigProjDesc = $('.proj p');
    const bigProjImage = $('.proj div');
    const bigProLink = $('.proj #live-link');
    const githubLink = $('.proj #github-link')

    createProjListener();

    function createProjListener() {
        const projThumbs = document.querySelectorAll('.proj-thumb');
        projThumbs.forEach((thumb, i) => {
            if(i === 0){
                updateProjects(thumb);
                $(thumb).addClass('selected').css({ border: "2px solid black" });
            }
            thumb.addEventListener('click', function () {
                $('.proj-thumb').removeClass('selected').css({ border: "none" });
                $(this).addClass('selected').css({ border: "2px solid black" });
                // for (let i = 0; i < projThumbs.length; i++) {
                //     projThumbs[i].style.border = "none"
                // }
                // this.style.border = "2px solid black";
                updateProjects(this);
            })
        })
    }

    createProjListener();







    icons.forEach(function (icon) {
        icon.addEventListener('mouseenter', function () {
            this.children[1].style.display = "block"
        });
        icon.addEventListener('mouseleave', function () {
            this.children[1].style.display = "none"
        });
    });
    if (github) {
        github.addEventListener('mouseenter', function () {
            this.lastChild.style.display = "block"
        });
        github.addEventListener('mouseleave', function () {
            this.lastChild.style.display = "none"
        });
    };



    function linkListener() {
        menu.slideUp();
        menuToggle = false;
        // window.scrollTo(0, this.top)
        navLinks.forEach(link => {
            link.classList.remove('active');
        });
        this.classList.add('active');

    }

    function linkListenerDefault() {
        menuToggle = false;
        // window.scrollTo(0, this.top)
        navLinks.forEach(link => {
            link.classList.remove('active');
        });
        this.classList.add('active');
    }
    navLinks.forEach(li => {
        li.addEventListener('click', function () {
            scrollTo(li);
            // console.log(li.dataset);
        })
    })

    function updateProjects(node){
        bigProjImage.css({
            'background': node.style.background, "background-position": "center",
            "background-size": "contain", "background-repeat": "no-repeat"
        })
        bigProLink.text(node.attributes.name.nodeValue);
        bigProLink.attr("href", node.attributes.link.nodeValue);
        githubLink.attr("href", node.attributes.github.nodeValue);
        githubLink.text(node.attributes.name.nodeValue + " Github");
        bigProjDesc.html(node.attributes.desc.nodeValue);
        techs = node.attributes.technologies.nodeValue.split(', ');
        icons.forEach(icon => {
            icon.style.display = "none";
            techs.forEach(tech => {
                if (icon.firstChild.className === tech) {
                    icon.style.display = "block";
                }
            })
        })
    }

    //SCROLLER


    $(document).ready(function () {
        $('section[data-type="background"]').each(function () {
            var $bgobj = $(this); // assigning the object

            $(window).scroll(function () {
                var yPos = -($(window).scrollTop() / $bgobj.data('speed'));

                // Put together our final background position
                var coords = '50% ' + yPos + 'px';

                // Move the background
                $bgobj.css({ backgroundPosition: coords });
            });
        });
    });

})();

