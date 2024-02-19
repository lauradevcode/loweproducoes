<!DOCTYPE html>
@php use Illuminate\Support\Facades\URL; @endphp
<html xmlns="http://www.w3.org/1999/xhtml" lang="id-ID" prefix="og: http://ogp.me/ns#">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecionando para {{ $whatsappAgent->name }}...</title>
    <meta name="robots" content="noindex, nofollow">
    <script type='text/javascript'>
        /* <![CDATA[ */
        var bosswr_whatsapp_chat = "{{ URL::signedRoute('whatsapp-widget.api') }}";
        var bosswr_whatsapp_chat_data = "agent={{ $whatsappAgent->id }}&number={{ $whatsappAgent->phone }}&type=click&ref={{ config('whatsapp-widget.url') }}";
        var bosswr_whatsapp_chat_redirect = "https://wa.me/{{ $whatsappAgent->phone }}?text={{ urlencode($whatsappAgent->text) }}";
        /* ]]> */
    </script>
    {{ Vite::useBuildDirectory("vendor/whatsapp-widget")->withEntryPoints(['resources/js/wa-redirect.js']) }}
    @include('developer-by::developer-by-head')
</head>
<body>
<div class="agent-forward">
    <p class="bosswr-whatsapp-chat-loading-connect"></p>
    <div class="agent-avatar">
        <img width="150" height="150" class="avatar wp-post-image" alt="{{ $whatsappAgent->name }}"
             src="{{ $whatsappAgent->image_url ?? Vite::useBuildDirectory("vendor/whatsapp-widget")->asset('resources/images/whatsapp-icon-logo.svg') }}"/>
    </div>
    <h1>{{ $whatsappAgent->name }}</h1>
    <div class="number">
        <img class="wa-icon"
             src="{{ Vite::useBuildDirectory("vendor/whatsapp-widget")->asset('resources/images/whatsapp-icon-redirect.png') }}"/>
        <label>+{{ $whatsappAgent->phone }}</label>
    </div>
    <div class="lds-spinner">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
@include('developer-by::developer-by-body')
</body>
</html>
