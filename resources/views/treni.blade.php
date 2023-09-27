<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Migration Seeder</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <h1>Laravel Migration Seeder</h1>

    <div class="container">
        <div class="card-container">
            @foreach ($trains as $train)
                <div class="card">
                    <div class="pad">Azienda: {{ $train->azienda }}</div>
                    <div class="cont-info pad">
                        <div class="pad">Partenza alle: {{ $train->orario_partenza }}</div>
                        <div class="pad">Arrivo alle: {{ $train->orario_arrivo }}</div>
                        <div class="pad">Dalla stazione di {{ $train->stazione_di_partenza }}</div>
                        <div class="pad">Alla stazione di {{ $train->stazione_di_arrivo }}</div>
                    </div>
                    <div class="pad">Codice treno: {{ $train->codice_treno }}</div>
                    <div class="pad">Numero carrozze: {{ $train->numero_carrozze }}</div>
                    <div class="pad">
                        @if($train->in_orario)
                            <div>In orario</div>
                        @else
                            <div>In ritardo</div>
                        @endif
                    </div>
                    <div class="pad">
                        @if($train->cancellato)
                            <div>Corsa cancellata</div>
                        @else
                            <div>Corsa attiva</div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
