<div class="loading"><!-- loading container --></div>
<div class="container">
    @section('footer')
        <p class="text-muted">
           Copyright &copy; {{ Config::get('gzero.domain') }},
            @lang('common.allRightsReserved')
        </p>
    @show
    <script src="/js/common.js"></script>
    <script src="/js/jquery.metisMenu.js"></script>
    <script>
        $(function() {
            $(".nav-stacked").metisMenu({
                toggle: false
            });
            //Expand parent of an active element
            $(".nav-stacked li.active").parents('li').addClass('active').has('ul').children('ul').addClass('collapse in');
        });
    </script>
</div>
