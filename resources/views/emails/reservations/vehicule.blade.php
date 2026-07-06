<x-mail::message>
# Bonjour {{ $reservation->nom }} {{ $reservation->prenom }},

Nous avons bien reçu votre demande de réservation de véhicule sur Voyage Difiant. 
Ceci est un accusé de réception pour vous informer que votre demande est en cours de traitement.

**Détails de la réservation :**
- **Véhicule :** {{ $reservation->vehicule->nom }}
- **Date de début :** {{ \Carbon\Carbon::parse($reservation->datedebut)->format('d/m/Y') }}
- **Date de fin :** {{ \Carbon\Carbon::parse($reservation->datefin)->format('d/m/Y') }}
- **Lieu de prise en charge :** {{ $reservation->lieu_prise_en_charge ?? 'Non précisé' }}
- **Lieu de restitution :** {{ $reservation->lieu_restitution ?? 'Non précisé' }}
- **Prix total estimé :** {{ number_format($reservation->prix_total, 0, ',', ' ') }} Fcfa

Notre équipe vous contactera très prochainement au **{{ $reservation->numerotel }}** ou par e-mail pour confirmer la disponibilité et finaliser la réservation.

<x-mail::button :url="config('app.url')">
Visiter notre site
</x-mail::button>

Merci d'avoir choisi {{ config('app.name') }}.

Cordialement,<br>
L'équipe {{ config('app.name') }}
</x-mail::message>
