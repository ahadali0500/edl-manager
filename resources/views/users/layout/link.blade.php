<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>EDL Manager</title>
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/static/img/icons/favicon-16x16.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/static/img/icons/favicon-32x32.png') }}">
<link rel="stylesheet" href="{{ asset('assets/static/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
<link rel="stylesheet" href="{{ asset('assets/static/css/custom_css.css') }}">
<link rel="stylesheet" href="{{ asset('assets/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/ajax/libs/font-awesome/5.15.4/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/static/css/smoothproducts.css') }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" charset="UTF-8">
    document.addEventListener('DOMContentLoaded', function() {
    cookieconsent.run({
        "notice_banner_type": "simple",
        "consent_type": "express",
        "palette": "light",
        "language": "en",
        "page_load_consent_levels": ["strictly-necessary"],
        "notice_banner_reject_button_hide": false,
        "preferences_center_close_button_hide": false,
        "website_name": "EDL Manager",
        "website_privacy_policy_url": "https://www.edlmanager.com/privacy/"
    });
    });
</script>
</noscript>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
    dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-FK3HLDHKC5');
</script>
<script>
    // Timezone settings
    const timezone = Intl.DateTimeFormat().resolvedOptions().timeZone; // e.g. "America/New_York"
    document.cookie = "timezone=" + timezone;
</script>