<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main class="bg-light py-5">
        <div class="container h-100vh d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-12">
                    <div class="cards-container d-flex flex-wrap h-100vh justify-content-between">
                        @foreach($trains as $train)
                            <div class="card single p-3">
                                <h4>Treno numero: {{ $train['Codice_Treno'] }}</h4>
                                <p><strong>Azienda:</strong> {{ $train['Azienda'] }}</p>
                                <p><strong>Stazione di partenza:</strong> {{ $train['Stazione_di_partenza'] }}</p>
                                <p><strong>Stazione di arrivo:</strong> {{ $train['Stazione_di_arrivo'] }}</p>
                                <p><strong>Orario di partenza:</strong> {{ $train['Orario_di_partenza'] }}</p>
                                <p><strong>Orario di arrivo:</strong> {{ $train['Orario_di_arrivo'] }}</p>
                                <p><strong>Numero Carrozze:</strong> {{ $train['Numero_Carrozze'] }}</p>
                                @if($train['In_orario'] == 0)
                                    <p><strong>Ritardo:</strong> No</p>
                                @else
                                    <p><strong>Ritardo:</strong> Si</p>
                                @endif
                                @if($train['Cancellato'] == 0)
                                    <p><strong>Status:</strong> Attivo</p>
                                @else
                                    <p><strong>Status:</strong> Cancellato</p>
                                @endif
                                </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>