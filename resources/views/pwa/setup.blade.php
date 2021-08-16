<script src="{{ asset('mainServiceWorker.js') }}"></script>
<script>

    // Screen download app.
    // btn-add-home-screen

    let deferredPrompt;
    let display = document.getElementById("install-app");
    var btn = document.getElementById("installApp");
    window.addEventListener('beforeinstallprompt', (e) => {
        e.preventDefault();
        deferredPrompt = e;
    });
    
    btn.addEventListener('click', (e) => {
    deferredPrompt.prompt();
    deferredPrompt.userChoice.then((choiceResult) => {
        if (choiceResult.outcome === 'accepted') {
            console.log('User accepted the A2HS prompt');
        } else {
            console.log('User dismissed the A2HS prompt');
        }
        deferredPrompt = null;
        });
    });

</script>