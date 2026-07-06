<x-mail::message>
# Bonjour {{ $contact->nom }} {{ $contact->prenom }},

Nous avons bien reçu votre message sur le site de **Voyage Édifiant**. 
Ceci est un accusé de réception pour vous informer que notre équipe a bien pris en compte votre demande.

**Détails de votre message :**
- **Profil :** {{ ucfirst($contact->profil) }}
- **Objet :** {{ $contact->objet }}
- **Téléphone :** {{ $contact->telephone }}
- **Message :**
> {{ $contact->message }}

Notre équipe vous répondra dans les plus brefs délais au **{{ $contact->telephone }}** ou par e-mail.

<x-mail::button :url="config('app.url')">
Visiter notre site
</x-mail::button>

Merci de nous faire confiance.

Cordialement,<br>
L'équipe {{ config('app.name', 'Voyage Édifiant') }}
</x-mail::message>
