@if(session('success') || session('status') || session('error') || $errors->any())
    <div class="form-alert-box mb-4" style="position: relative; z-index: 9999;">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                <i class="fas fa-check-circle me-2"></i> {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
                <i class="fas fa-exclamation-triangle me-2"></i> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
                <strong><i class="fas fa-exclamation-circle me-2"></i> Veuillez corriger les erreurs suivantes :</strong>
                <ul class="mb-0 mt-2">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var modalEl = document.getElementById('staticBackdrop');
            if (modalEl && modalEl.querySelector('.form-alert-box')) {
                if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
                    var myModal = new bootstrap.Modal(modalEl);
                    myModal.show();
                }
            }
            const alertBox = document.querySelector('.form-alert-box');
            if (alertBox) {
                alertBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        });
    </script>
@endif
