</div>
</div>


</body>

<script src="<?= base_url('assets/js/material.min.js'); ?>" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="<?= base_url('assets/js/chartist.min.js'); ?>"></script>
<!--  Dynamic Elements plugin -->
<script src="<?= base_url('assets/js/arrive.min.js'); ?>"></script>
<!--  PerfectScrollbar Library -->
<script src="<?= base_url('assets/js/perfect-scrollbar.jquery.min.js'); ?>"></script>
<!--  Notifications Plugin    -->
<script src="<?= base_url('assets/js/bootstrap-notify.js'); ?>"></script>
<!--  Google Maps Plugin    -->
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
<!-- Material Dashboard javascript methods -->
<script src="<?= base_url('assets/js/material-dashboard.js?v=1.2.0'); ?>"></script>

<script type="text/javascript">
    $( document ).ready(function() {
        var tab = $('ul#main-tab').data('tab');
        $('ul#main-tab li.'+tab).addClass('actived');                       
        // alert(tab);                                                   
    });
</script>
</html>