@push('js')
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js"></script>
    <script>
        var confetes;

        window.addEventListener('focus', startTimer);

        window.addEventListener('blur', stopTimer);

        function timerHandler() {
            confetti({
                particleCount: 100,
                startVelocity: 30,
                spread: 360,
                origin: {
                    x: Math.random(),
                    // since they fall down, start a bit higher than random
                    y: Math.random() - 0.2
                }
            });
        }

        function startTimer() {
            confetes = window.setInterval(timerHandler, 1000);
        }

        function stopTimer() {
            window.clearInterval(confetes);
        }

        startTimer();
    </script>
@endpush
