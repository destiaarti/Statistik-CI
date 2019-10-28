          <!-- REQUIRED SCRIPTS -->
          <!-- jQuery -->
          <script src="<?php print base_url('adminlte3/'); ?>plugins/jquery/jquery.min.js"></script>
          <!-- Bootstrap -->
          <script src="<?php print base_url('adminlte3/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
          <!-- AdminLTE App -->
          <script src="<?php print base_url('adminlte3/'); ?>dist/js/adminlte.js"></script>

          <!-- OPTIONAL SCRIPTS -->
          <script src="<?php print base_url('adminlte3/'); ?>dist/js/demo.js"></script>

          <!-- PAGE PLUGINS -->
          <!-- SparkLine -->
          <script src="<?php print base_url('adminlte3/'); ?>plugins/sparkline/jquery.sparkline.min.js"></script>
          <!-- jVectorMap -->
          <script src="<?php print base_url('adminlte3/'); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
          <script src="<?php print base_url('adminlte3/'); ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
          <!-- SlimScroll 1.3.0 -->
          <script src="<?php print base_url('adminlte3/'); ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
          <!-- ChartJS 1.0.2 -->
          <script src="<?php print base_url('adminlte3/'); ?>plugins/chartjs-old/Chart.min.js"></script>

          <!-- PAGE SCRIPTS -->
          <script src="<?php print base_url('adminlte3/'); ?>dist/js/pages/dashboard2.js"></script>

          <!-- DataTables -->
          <script src="<?php print base_url('adminlte3/'); ?>plugins/datatables/jquery.dataTables.js"></script>
          <script src="<?php print base_url('adminlte3/'); ?>plugins/datatables/dataTables.bootstrap4.js"></script>

          <script type="text/javascript">
            $( document ).ready(function() {
              $( ".xxx" ).click(function() {
                var ttt = $(this).attr('id');
                $( 'input[name="id_pelamar"]' ).val(ttt);
           //alert('haha')
         });

            });

          </script>

          <script>
            $(function () {
              $('#example1').DataTable()
              $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : true
              })
              $('#example3').DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : true
              })
              $('#example4').DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : true
              })
              $('#example5').DataTable({
                'paging'      : false,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : false,
                'info'        : false,
                'autoWidth'   : true
              })
              $('#example33').DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : false,
                'info'        : true,
                'autoWidth'   : true
              })
              $('#example34').DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : false,
                'info'        : true,
                'autoWidth'   : true
              })
              $('#example35').DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : false,
                'info'        : true,
                'autoWidth'   : true
              })
              $('#example36').DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : true
              })
            })
          </script>

          <script type="text/javascript">
            function toggle(pilih) {
            checkboxes = document.getElementsByName('pilih[]'); //melakukan dom berdasarkan name atribut
            for(var i=0, n=checkboxes.length;i<n;i++) { //melakukan liooping sejumlah checkbox yang ber name sama
              checkboxes[i].checked = pilih.checked; //memberikan nilai kepada checkbox apakah checked atau tidak.
            }
          }
        </script>
        <script>
          cek_box = document.getElementById('cekbox');
          function cek(cekbox){
            for(i=0; i < cekbox.length; i++){
              cek_box[i].checked = true;
            }
          }
          function uncek(cekbox){
            for(i=0; i < cekbox.length; i++){
              cek_box[i].checked = false;
            }
          }
        </script>

        <SCRIPT LANGUAGE="JavaScript">
          function CheckAll(chk)
          {
            for (i = 0; i < chk.length; i++)
              chk[i].checked = true ;
          }

          function UnCheckAll(chk)
          {
            for (i = 0; i < chk.length; i++)
              chk[i].checked = false ;
          }
        </script>





        <script src="../assets/js/core/jquery.min.js"></script>
        <script src="../assets/js/core/popper.min.js"></script>
        <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
        <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!-- Plugin for the momentJs  -->
        <script src="../assets/js/plugins/moment.min.js"></script>
        <!--  Plugin for Sweet Alert -->
        <script src="../assets/js/plugins/sweetalert2.js"></script>
        <!-- Forms Validations Plugin -->
        <script src="../assets/js/plugins/jquery.validate.min.js"></script>
        <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
        <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
        <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
        <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
        <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
        <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
        <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
        <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
        <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
        <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
        <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
        <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
        <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
        <script src="../assets/js/plugins/fullcalendar.min.js"></script>
        <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
        <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="../assets/js/plugins/nouislider.min.js"></script>
        <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
        <!-- Library for adding dinamically elements -->
        <script src="../assets/js/plugins/arrive.min.js"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!-- Chartist JS -->
        <script src="../assets/js/plugins/chartist.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="../assets/js/plugins/bootstrap-notify.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="../assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
        <!-- Material Dashboard DEMO methods, don't include it in your project! -->
        <script src="../assets/demo/demo.js"></script>
        <script>
          $(document).ready(function() {
            $().ready(function() {
              $sidebar = $('.sidebar');

              $sidebar_img_container = $sidebar.find('.sidebar-background');

              $full_page = $('.full-page');

              $sidebar_responsive = $('body > .navbar-collapse');

              window_width = $(window).width();

              fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

              if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                  $('.fixed-plugin .dropdown').addClass('open');
                }

              }

              $('.fixed-plugin a').click(function(event) {
                    // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                    if ($(this).hasClass('switch-trigger')) {
                      if (event.stopPropagation) {
                        event.stopPropagation();
                      } else if (window.event) {
                        window.event.cancelBubble = true;
                      }
                    }
                  });

              $('.fixed-plugin .active-color span').click(function() {
                $full_page_background = $('.full-page-background');

                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if ($sidebar.length != 0) {
                  $sidebar.attr('data-color', new_color);
                }

                if ($full_page.length != 0) {
                  $full_page.attr('filter-color', new_color);
                }

                if ($sidebar_responsive.length != 0) {
                  $sidebar_responsive.attr('data-color', new_color);
                }
              });

              $('.fixed-plugin .background-color .badge').click(function() {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('background-color');

                if ($sidebar.length != 0) {
                  $sidebar.attr('data-background-color', new_color);
                }
              });

              $('.fixed-plugin .img-holder').click(function() {
                $full_page_background = $('.full-page-background');

                $(this).parent('li').siblings().removeClass('active');
                $(this).parent('li').addClass('active');


                var new_image = $(this).find("img").attr('src');

                if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                  $sidebar_img_container.fadeOut('fast', function() {
                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                    $sidebar_img_container.fadeIn('fast');
                  });
                }

                if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                  var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                  $full_page_background.fadeOut('fast', function() {
                    $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                    $full_page_background.fadeIn('fast');
                  });
                }

                if ($('.switch-sidebar-image input:checked').length == 0) {
                  var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                  var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                  $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                  $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                }

                if ($sidebar_responsive.length != 0) {
                  $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                }
              });

              $('.switch-sidebar-image input').change(function() {
                $full_page_background = $('.full-page-background');

                $input = $(this);

                if ($input.is(':checked')) {
                  if ($sidebar_img_container.length != 0) {
                    $sidebar_img_container.fadeIn('fast');
                    $sidebar.attr('data-image', '#');
                  }

                  if ($full_page_background.length != 0) {
                    $full_page_background.fadeIn('fast');
                    $full_page.attr('data-image', '#');
                  }

                  background_image = true;
                } else {
                  if ($sidebar_img_container.length != 0) {
                    $sidebar.removeAttr('data-image');
                    $sidebar_img_container.fadeOut('fast');
                  }

                  if ($full_page_background.length != 0) {
                    $full_page.removeAttr('data-image', '#');
                    $full_page_background.fadeOut('fast');
                  }

                  background_image = false;
                }
              });

              $('.switch-sidebar-mini input').change(function() {
                $body = $('body');

                $input = $(this);

                if (md.misc.sidebar_mini_active == true) {
                  $('body').removeClass('sidebar-mini');
                  md.misc.sidebar_mini_active = false;

                  $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                } else {

                  $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                  setTimeout(function() {
                    $('body').addClass('sidebar-mini');

                    md.misc.sidebar_mini_active = true;
                  }, 300);
                }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                      window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                      clearInterval(simulateWindowResize);
                    }, 1000);

                  });
            });
        });
      </script>
      <script>
        $(document).ready(function() {
                // Javascript method's body can be found in assets/js/demos.js
                md.initDashboardPageCharts();

              });
            </script>

      <script type="text/javascript">
              var x = bilangan(<?php echo $nilai ?>);
              document.getElementById("demo").innerHTML = x;
              function bilangan(x){
                var  bilangan = x;

                var reverse = bilangan.toString().split('').reverse().join(''),
                ribuan  = reverse.match(/\d{1,4}/g);
                ribuan = ribuan.join(',').split('').reverse().join('');

          // Cetak hasil 
          return ribuan; 
        }
      </script>

      </body>
      </html>
