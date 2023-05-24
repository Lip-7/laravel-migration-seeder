<?php

?>

@extends('layouts.app')
@section('content')
    <div class="container">
        <table class="table mt-5">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Company</th>
                    <th scope="col">Departure station </th>
                    <th scope="col">Arrival station</th>
                    <th scope="col">Date</th>
                    <th scope="col">Departure Time</th>
                    <th scope="col">Arrival Time</th>
                    <th scope="col">TrainCode</th>
                    <th scope="col">Carriages</th>
                    <th scope="col">In Time</th>
                    <th scope="col">Deleted</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                <tr class="text-nowrap text-center @if ($train->deleted == 1) cancelled @endif">
                    <th scope="row">{{$train->id}}</th>
                    <td>{{$train->company}}</td>
                    <td>{{$train->leaving_station}}</td>
                    <td>{{$train->arriving_station}}</td>
                    <td>{{$train->date}}</td>
                    <td>{{$train->leaving_time}}</td>
                    <td>{{$train->arriving_time}}</td>
                    <td>{{$train->train_code}}</td>
                    <td>{{$train->carriages}}</td>
                    <td>@if ($train->in_time == 0) got late @elseif ($train->in_time == 1) Yes @else XXX  @endif</td>
                    <td> @if ($train->deleted == 0) No @else Yes @endif </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
