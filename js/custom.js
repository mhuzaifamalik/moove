$(document).ready(function () {
    var url = window.location.pathname;
    var filename = url.substring(url.lastIndexOf('/') + 1);
    if (filename == "") {
        filename = "index.php"
    }
    $("header .nav-item .nav-link").removeClass("active");
    $(`header .nav-item .nav-link[href="${filename}"]`).addClass("active")
})
$(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        $("header").addClass("scroll");
    } else {
        $("header").removeClass("scroll");
    }
});
$('.mobile').owlCarousel({
    loop: false,
    dots: false,
    margin: 15,
    animateOut: 'slideOutDown',
    animateIn: 'flipInX',
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 3
        }
    }
});

$(document).ready(function () {
    $("#product-det-item").owlCarousel({
        loop: false,
        items: 1,
        nav: false,
        dots: true,
        dotsData: true,
        URLhashListener: true,
    })
})
$(".quantity button").click(function(){
    let targetInp = $(this).siblings('input')
    let qty = parseInt($(targetInp).val())
    if($(this).hasClass('inc')){
        qty++
    }
    else if($(targetInp).val() > 1){
        qty--
    }
    $(targetInp).val(qty)
})

$(document).ready(function(){
    $(".tank .custome-card .cup-tea ul li input").click(function(){
        debugger
        const mainImg = $(this).parents(".custome-card").find(".image-main")
        const rollingImg = $(this).parents(".custome-card").find(".roling")
        $(mainImg).attr("src",$(this).data("imgmain"))
        $(rollingImg).attr("src",$(this).data("imgrolling"))
    })
})