   
    /*side menu*/
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

    $(document).ready(function() {
        $(".al").click(function() {
            $(".a").slideToggle();
        });
    });


    $(document).ready(function() {
        $(".bl").click(function() {
            $(".b").slideToggle();
        });
    });


    $(document).ready(function() {
        $(".cl").click(function() {
            $(".c").slideToggle();
        });
    });


    $(document).ready(function() {
        $(".dl").click(function() {
            $(".d").slideToggle();
        });
    });