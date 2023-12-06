@if(session()->has('message'))
    <div class="toast align-items-center text-bg-info border position-fixed top-0 end-0 mt-3 me-3 p-3" role="alert" aria-live="assertive" aria-atomic="true" style="min-width: 35%; z-index: 2;">
        <div class="d-flex">
            <div class="toast-body fw-bold fs-6">
                <i class="bi bi-exclamation-circle-fill"></i>&nbsp;
                {{session('message')}}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
    <script>
        window.onload = function() {
            const toastLiveExample = document.querySelector('.toast');
            const toast = new bootstrap.Toast(toastLiveExample);
            toast.show();
        };
    </script>
@endif