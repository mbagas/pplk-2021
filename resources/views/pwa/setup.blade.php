<script src="{{ asset('mainServiceWorker.js') }}"></script>
<script>

    // Screen download app.
    // btn-add-home-screen
    $(document).ready(function(){
        $('#cancelInstallApp').click(function(){
            $('#install-app').css('display', 'none');
        })
    })

    let deferredPrompt;
    let display = document.getElementById("install-app");
    var btn = document.getElementById("installApp");
    window.addEventListener('beforeinstallprompt', (e) => {
        e.preventDefault();
        deferredPrompt = e;
        display.style.display = 'block';
        btn.style.display = 'inline-block';
    });
    
    btn.addEventListener('click', (e) => {
    btn.style.display = 'none';
    display.style.display = 'none';
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