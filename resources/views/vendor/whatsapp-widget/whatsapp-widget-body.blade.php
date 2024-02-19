@php use Illuminate\Support\Facades\URL;use SistemaBoss\WhatsappWidget\Models\WhatsappAgent; @endphp
@php $whatsappAgents = WhatsappAgent::query()->where('active', true)->get(); @endphp
@if($whatsappAgents->count())
    <div class="bosswr-container bosswr-floating bottom-right" style=bottom:30px;right:30px;>
        <span id="contact-trigger" class="bosswr-whatsapp-icon-only">
            <img class="icon"
                 src="{{ Vite::useBuildDirectory("vendor/whatsapp-widget")->asset('resources/images/whatsapp-icon-a.svg') }}">
        </span>
        <div id="notification-badge">{{ $whatsappAgents->count() }}</div>
        <ul class="bosswr-whatsapp-content">
            <li class="bosswr-content-header">
                <a class="close-chat" title="Close Support">Fechar</a>
                <img class="icon"
                     src="{{ Vite::useBuildDirectory("vendor/whatsapp-widget")->asset('resources/images/whatsapp-icon-a.svg') }}">
                <h5>Sistema Boss <span>Estamos disponíveis</span></h5>
            </li>
            @foreach($whatsappAgents as $whatsappAgent)
                <li class="available">
                    <a class="bosswr-whatsapp-button" target="_blank" data-agent="{{ $whatsappAgent->id }}"
                       data-number="{{ $whatsappAgent->phone }}" rel="nofollow"
                       href="{{ URL::signedRoute('whatsapp-widget.redirect', ['whatsapp_agent' => $whatsappAgent->id, 'agent' => $whatsappAgent->id, 'number' => $whatsappAgent->phone, 'ref' => config('whatsapp-widget.url')]) }}">
                        <img width="60" height="60" class="bosswr-whatsapp-avatar wp-post-image"
                             alt="{{ $whatsappAgent->name }}"
                             src="{{ $whatsappAgent->image_url ?? Vite::useBuildDirectory("vendor/whatsapp-widget")->asset('resources/images/whatsapp-icon-logo.svg') }}"/>
                        <span class="bosswr-whatsapp-text">
                            <span class="bosswr-whatsapp-label">
                                <span class="status">Online</span>
                            </span>
                            {{ $whatsappAgent->name }}
                        </span>
                    </a>
                </li>
            @endforeach
            <li class="bosswr-content-footer">
                <p></p>
            </li>
        </ul>
        <audio id="bosswr-whatsapp-audio" preload="auto">
            <source src="{{ Vite::useBuildDirectory("vendor/whatsapp-widget")->asset('resources/midia/alert.mp3') }}"
                    type="audio/mpeg"/>
        </audio>
        <script type="text/javascript">
            setTimeout(function () {
                document.getElementById('bosswr-whatsapp-audio').play();
            }, 3000)
        </script>
    </div>
@endif
