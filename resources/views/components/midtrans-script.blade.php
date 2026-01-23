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
                console.log('SUCCESS', result.order_id);

                // 🔥 redirect ke page success
                window.location.href =
                "{{ route('PNSuccess') }}?order_id=" + result.order_id;
            },

            onPending: function (result) {
                console.log('PENDING', result.order_id);

                // optional: tetap arahkan ke success / halaman pending
                window.location.href =
                "{{ route('PNSuccess') }}?order_id=" + result.order_id;
            },

            onError: function (result) {
                console.log('ERROR', result);
                alert('Pembayaran gagal');
            },

            onClose: function () {
                console.log('Popup ditutup');
            }
        });
    });
});
</script>