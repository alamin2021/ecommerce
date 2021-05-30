@include('layouts/backend/right-sidebar')

<!--footer start-->
<footer class="site-footer">
    <div class="text-center">
        2018 &copy; FlatLab by VectorLab.
        <a href="#" class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
</footer>
<!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="{{ asset('backend/js/jquery.js')}}"></script>
<script src="{{ asset('backend/js/bootstrap.bundle.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{ asset('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{ asset('backend/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{ asset('backend/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
<script src="{{ asset('backend/js/jquery.sparkline.js')}}" type="text/javascript"></script>
<script src="{{ asset('backend/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
<script src="{{ asset('backend/js/owl.carousel.js')}}" ></script>
<script src="{{ asset('backend/js/jquery.customSelect.min.js')}}" ></script>
<script src="{{ asset('backend/js/respond.min.js')}}" ></script>

<!--right slidebar-->
<script src="{{ asset('backend/js/slidebars.min.js')}}"></script>

<!--common script for all pages-->
<script src="{{ asset('backend/js/common-scripts.js')}}"></script>

<!--script for this page-->
<script src="{{ asset('backend/js/sparkline-chart.js')}}"></script>
<script src="{{ asset('backend/js/easy-pie-chart.js')}}"></script>
<script src="{{ asset('backend/js/count.js')}}"></script>

<script>

//owl carousel

$(document).ready(function() {
    $("#owl-demo").owlCarousel({
        navigation : true,
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem : true,
        autoPlay:true

    });
});

//custom select box

$(function(){
    $('select.styled').customSelect();
});

$(window).on("resize",function(){
    var owl = $("#owl-demo").data("owlCarousel");
    owl.reinit();
});

</script>

</body>

<!-- Mirrored from thevectorlab.net/flatlab-4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 May 2021 03:23:52 GMT -->
</html>