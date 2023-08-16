@php
    header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
    header('Cache-Control: post-check=0, pre-check=0', false);
    header('Pragma: no-cache');
@endphp

{{-- Swal --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    window.Toast = Swal.mixin({
        toast: true,
        position: 'top-start',
        background:'#09AF09',
        color:'white',
        iconColor: 'white',
        customClass: {
            popup: 'colored-toast'
        },
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true
    });
</script>




@if (session()->has('success'))
    <script>
        window.Toast.fire({
            icon: "success",
            text: "{!! session()->get('success') !!}",
        });
    </script>
@endif

@if (session()->has('error'))
    <script>
        window.Toast.fire({
            icon: "error",
            text: "{!! session()->get('error') !!}",
        });
    </script>
@endif
@if (count($errors) > 0)
    <script type="text/javascript">
        window.Toast.fire({
            icon: 'error',
            text: "{!! __('alerts.error.something_went_wrong') !!}",
        })
    </script>
@endif
