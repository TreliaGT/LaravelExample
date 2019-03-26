@extends('layout');

@section('title', 'Gamers | Game Details')

@section('messages')
@endsection

@section('content')
    <header>
        <h1>Games</h1>
    </header>
    <section>
        <h3>Game: {{ $game->game_name }}</h3>
        <table class="table table-striped">
            <tbody>
            <tr>
                <th scope="row">ID</th>
                <td>{{ $game->id }} </td>
            </tr>
            <tr>
                <th scope="row">Name</th>
                <td>{{ $game->name }} </td>
            </tr>
            <tr>
                <th scope="row">Manufacturer Id</th>
                <td>{{ $game->manufacturer_id }} </td>
            </tr>
            <tr>
                <th scope="row">Minimum Age</th>
                <td>{{ $game->min_age }} </td>
            </tr>
            <tr>
                <th scope="row">Maximum Age</th>
                <td>{{ $game->max_age }} </td>
            </tr>
            <tr>
                <th scope="row">Minimum Players</th>
                <td>{{ $game->min_players }} </td>
            </tr>
            <tr>
                <th scope="row">Maximum Players</th>
                <td>{{ $game->max_players }} </td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <td colspan="2">
                    last updated {{ $game->updated_at }}
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    date updated {{ $game->created_at }}
                </td>
            </tr>
            </tfoot>
        </table>
    </section>
@endsection