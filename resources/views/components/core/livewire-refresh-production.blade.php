@production
    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.hook('request', ({fail}) => {
                fail(({status}) => {
                    if (status === 502) {
                        return false;
                    }
                    if (status === 419) {
                        document.location.reload(true);
                        return false;
                    }
                    if (status === 500) {
                        document.location.reload(true);
                        return false;
                    }
                })
            })
        })
    </script>
@endproduction
