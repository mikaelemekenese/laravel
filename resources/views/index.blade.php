@extends('template')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Medical Appointments</p>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($appointments as $appointment)
                            <tr>
                                <td>{{ $appointment->id }}</td>
                                <td><strong>{{ $appointment->date }}</strong></td>
                                <td><a class="button is-primary" href="{{ route('appointments.show', $appointment->id) }}">Voir</a></td>
                                <td><a class="button is-warning" href="{{ route('appointments.edit', $appointment->id) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('appointments.destroy', $appointment->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button is-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection