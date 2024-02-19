<script type='text/javascript'>
    /* <![CDATA[ */
    var bosswr_whatsapp_chat = "{{ URL::signedRoute('whatsapp-widget.api') }}";
    /* ]]> */
</script>
{{ Vite::useBuildDirectory("vendor/whatsapp-widget")->withEntryPoints(['resources/js/app.js']) }}
