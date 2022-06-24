<!doctype html>
<html lang="en-SG">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="">
    <!-- Meta -->
    <!-- <meta name="facebook-domain-verification" content="u27bbr219i9uxw7suewm1d25ibghvo" />
    <meta name="keywords" content="Celegift in Singapore">
    <link rel="canonical" id='canonical' href="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" /> -->
    <!-- Favicons -->
    <!-- <link href="/assets/img/favicon.png" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link rel="preload"
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    </noscript>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Vendor CSS Files -->
    <link rel="preload" href="/assets/vendor/icofont/icofont.min.css?v=<?php echo date('YmdHis'); ?>" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="/assets/vendor/icofont/icofont.min.css?v=<?php echo date('YmdHis'); ?>">
    </noscript>

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="/css/app.css?v=<?php echo date('YmdHis'); ?>">

    <!-- Facebook Pixel Code -->
    <!-- <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '151340070431052');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" alt="FB Pixel" style="display:none"
            src="https://www.facebook.com/tr?id=151340070431052&ev=PageView&noscript=1" /></noscript> -->
    <!-- End Facebook Pixel Code -->

    <!-- Google Tag Manager -->
    <!-- <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P43ZXQJ');
    </script> -->
    <!-- End Google Tag Manager -->

    <!---------------------------------------------Admin css----------------------------------------------------------------------->
    <link href="/vendor/fontawesome-free/css/all.min.css?v=<?php echo date('YmdHis'); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.1.0/dist/vue-multiselect.min.css">


    <!--split -->
    <!-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script> -->

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P43ZXQJ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript> -->
    <!-- End Google Tag Manager (noscript) -->
    <main id="app">
        <div>
            <router-view></router-view>
        </div>
    </main>
    <script src="/js/app.js?v=<?php echo date('YmdHis'); ?>" defer></script>
    {{-- <a href="#" class="back-to-top"><i class="icofont-rounded-up"></i></a> --}}

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/jquery/jquery.min.js?v=<?php echo date('YmdHis'); ?>">
    </script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js?v=<?php echo date('YmdHis'); ?>" defer>
    </script>
    <script src="/assets/vendor/jquery.easing/jquery.easing.min.js?v=<?php echo date('YmdHis'); ?>">
    </script>

    <!-- Template Main JS File -->
    <script src="/assets/js/main-min.js?v=<?php echo date('YmdHis'); ?>">
    </script>

    <!---------------------------------------------------Admin js -------------------------------------------------->


    <!-- Custom scripts for all pages-->
    <!-- <script src="/js/sb-admin-2.min.js?v=<?php echo date('YmdHis'); ?>"></script> -->

    <!-- Page level plugins -->
    <!-- <script src="/vendor/datatables/jquery.dataTables.min.js?v=<?php echo date('YmdHis'); ?>"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js?v=<?php echo date('YmdHis'); ?>"></script> -->

    <!-- Page level custom scripts -->
    <!-- <script src="/js/demo/datatables-demo.js?v=<?php echo date('YmdHis'); ?>"></script> -->

    <!--Datatable -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.25/b-1.7.1/b-colvis-1.7.1/b-html5-1.7.1/b-print-1.7.1/fc-3.3.3/fh-3.1.9/kt-2.6.2/r-2.2.9/rg-1.1.3/rr-1.2.8/sc-2.0.4/sb-1.1.0/sp-1.3.0/sl-1.3.3/datatables.min.css" />

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.25/b-1.7.1/b-colvis-1.7.1/b-html5-1.7.1/b-print-1.7.1/fc-3.3.3/fh-3.1.9/kt-2.6.2/r-2.2.9/rg-1.1.3/rr-1.2.8/sc-2.0.4/sb-1.1.0/sp-1.3.0/sl-1.3.3/datatables.min.js">
    </script>


    <!---------------------------------------------------End of Admin js -------------------------------------------------->

    <!-- <script type="text/javascript">
        document.onreadystatechange = function() {
            var state = document.readyState;
            var IDcontents = document.getElementById('contents');
            var IDload = document.getElementById('load');
            if (state == 'interactive') {
                if (IDcontents) {
                    IDcontents.style.visibility = "hidden";
                }

            } else if (state == 'complete') {
                setTimeout(function() {
                    document.getElementById('interactive');
                    if (IDcontents) {
                        IDcontents.style.visibility = "visible";
                    } else if (IDload) {
                        IDload.style.visibility = "hidden";
                    }
                }, 1000);
            }
        }
    </script> -->

    <div id="load"></div>

</body>

</html>
