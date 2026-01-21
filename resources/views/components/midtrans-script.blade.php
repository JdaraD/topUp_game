<script
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="{{ config('services.midtrans.client_key') }}">
</script>

<script>
    document.addEventListener('livewire:init', () => {
        Livewire.on('midtrans-snap', ({ snapToken }) => {
            if (!snapToken) {
                console.error('Snap token kosong');
                return;
            }

            snap.pay(snapToken, {
                onSuccess: function (result) {
                    console.log('SUCCESS', result);
                },
                onPending: function (result) {
                    console.log('PENDING', result);
                },
                onError: function (result) {
                    console.log('ERROR', result);
                },
                onClose: function () {
                    console.log('Popup ditutup');
                }
            });
        });
    });
</script>
