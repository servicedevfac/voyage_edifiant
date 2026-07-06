<x-mail::message>
# Bonjour {{ $reservation->nom }} {{ $reservation->prenom }},

Nous avons bien reçu votre demande de Team Building sur Voyage Édifiant. 
Ceci est un accusé de réception pour vous informer que votre demande est en cours de traitement.

**Détails de la demande :**
- **Type de profil :** {{ ucfirst($reservation->profil) }}
- **Activité souhaitée :** {{ $reservation->typedactivite }}
- **Nombre de personnes :** {{ $reservation->nbrepers }}
- **Date de début :** {{ \Carbon\Carbon::parse($reservation->apartir)->format('d/m/Y') }}
- **Date de fin :** {{ \Carbon\Carbon::parse($reservation->jusquau)->format('d/m/Y') }}

Notre équipe étudiera votre demande et vous contactera très prochainement au **{{ $reservation->telephone }}** ou par e-mail pour vous proposer un devis ou finaliser les détails.

<x-mail::button :url="config('app.url')">
Visiter notre site
</x-mail::button>

Merci d'avoir choisi {{ config('app.name') }}.

Cordialement,<br>
L'équipe {{ config('app.name') }}
</x-mail::message>
