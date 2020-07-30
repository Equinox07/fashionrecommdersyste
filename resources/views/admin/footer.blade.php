<footer class="footer">
        <div class="container-fluid">
            <nav>
                <ul>
                    <li>
                       
                    </li>
                    <li>
                       
                    </li>
                    <li>
                       
                    </li>
                </ul>
            </nav>
            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>
               
            </div>
        </div>
    </footer>
</div>
</div>
</body>
<!--   Core JS Files   -->
<script src="{{asset('admin/js/core/jquery.min.js')}}"></script>
<script src="{{asset('admin/js/core/popper.min.js')}}"></script>
<script src="{{asset('admin/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="{{asset('admin/js/plugins/chartjs.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('admin/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('admin/js/now-ui-dashboard.js?v=1.0.1')}}"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('admin/demo/demo.js')}}"></script>
<script>
$(document).ready(function() {
// Javascript method's body can be found in assets/js/demos.js
demo.initDashboardPageCharts();
});
</script>

</html>