<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            Supprimer le compte
        </h2>

        <p class="mt-1 text-gray-600">
            Une fois que votre compte est supprimé, toutes ses ressources et données seront définitivement supprimées. Avant de supprimer votre compte, veuillez télécharger toutes les données ou informations que vous souhaitez conserver.
        </p>
    </header>

    <button class="inline-flex items-center px-4 py-2 bg-red-600 text-white font-medium rounded-md" onclick="openModal('confirm-user-deletion')">
        Supprimer le compte
    </button>

    <!-- Modal -->
    <div id="confirm-user-deletion" class="modal" show="$errors->userDeletion->isNotEmpty()" focusable>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                        @csrf
                        @method('delete')
            
                        <h2 class="text-lg font-medium text-gray-900">
                            Êtes-vous sûr de vouloir supprimer votre compte ?
                        </h2>
            
                        <p class="mt-1 text-gray-600">
                            Une fois votre compte supprimé, toutes ses ressources et données seront définitivement supprimées. Veuillez entrer votre mot de passe pour confirmer que vous souhaitez supprimer définitivement votre compte.
                        </p>
            
                        <div class="mt-6">
                            <label for="password" class="sr-only">Mot de passe</label>
            
                            <input id="password" name="password" type="password" class="mt-1 block w-3/4" placeholder="Mot de passe"/>
            
                            <!-- Error message for password -->
                            <div class="mt-2 text-red-600">
                                <!-- Display error message here -->
                            </div>
                        </div>
            
                        <div class="mt-6 flex justify-end">
                            <button type="button" class="secondary-button" onclick="closeModal('confirm-user-deletion')">
                                Annuler
                            </button>
                            <button type="submit" class="danger-button ms-3">
                                Supprimer le compte
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    // JavaScript to open and close the modal
    function openModal(modalId) {
        document.getElementById(modalId).style.display = 'block';
    }

    function closeModal(modalId) {
        document.getElementById(modalId).style.display = 'none';
    }
</script>
