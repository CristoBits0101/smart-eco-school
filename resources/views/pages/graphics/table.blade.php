@extends('layout.base')

@section('title', 'Bienvenido a SmartEcoSchool')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/graphics.css') }}" />
@endsection

@section('disconnect')
    @include('components.disconnect')
@endsection

@section('content')

    @if (session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif

    <main>
        <table>
            <thead>
                <tr>
                    <th>Código Sensor</th>
                    <th>Fecha Medición</th>
                    <th>Hora Medición</th>
                    <th>Tipo Medición</th>
                    <th>Valor Medición</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sensorMeasurements as $measurement)
                    <tr>
                        <td>{{ $measurement->codigo_sensor }}</td>
                        <td>{{ $measurement->fecha_medicion }}</td>
                        <td>{{ $measurement->hora_medicion }}</td>
                        <td>{{ $measurement->tipo_medicion }}</td>
                        <td>{{ $measurement->valor_medicion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>

@endsection