<x-mail::message>
# Bonjour {{ $reservation->nom }} {{ $reservation->prenom }},

Nous avons bien reçu votre demande concernant nos services d'Agence sur Voyage Édifiant. 
Ceci est un accusé de réception pour vous informer que votre demande est en cours de traitement.

**Détails de votre demande :**
- **Destination :** {{ $reservation->destination }}
- **Lieu de résidence actuel :** {{ $reservation->presidence }}
- **Date de départ prévue :** {{ \Carbon\Carbon::parse($reservation->apartirdu)->format('d/m/Y') }}
- **Date de retour prévue :** {{ \Carbon\Carbon::parse($reservation->jusquau)->format('d/m/Y') }}
- **Nombre de jours :** {{ $reservation->nbrejour }}
- **Adultes :** {{ $reservation->nbreadulte }} | **Enfants :** {{ $reservation->nbrenft }} | **Bébés :** {{ $reservation->nbrebebe }}

Notre équipe vous contactera très prochainement au **{{ $reservation->numero }}** ou par e-mail pour donner suite à votre demande.

<x-mail::button :url="config('app.url')">
Visiter notre site
</x-mail::button>

Merci d'avoir choisi {{ config('app.name') }}.

Cordialement,<br>
L'équipe {{ config('app.name') }}
</x-mail::message>
