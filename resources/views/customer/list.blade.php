@extends('layout.master')

@section('title', 'Customer')

@section('content1')
    <div style="border:1px solid gray; padding:7px">
        Customer List (<?php echo count($dtCustomer); ?>)
    </div>
@endsection


@section('content')
    <div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dtCustomer as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{ $item['id'] }}">
                                Show Detail
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @foreach ($dtCustomer as $item)
        <div class="modal fade" id="{{ $item['id'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Customer Detail</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>ID
                                    </td>
                                    <td>{{ $item['id'] }}
                                    </td>
                                <tr>
                                <tr>
                                    <td>Name
                                    </td>
                                    <td>{{ $item['name'] }}
                                    </td>
                                <tr>
                                <tr>
                                    <td>Phone Number
                                    </td>
                                    <td>{{ $item['phone'] }}
                                    </td>
                                <tr>
                                <tr>
                                    <td>Total Purchased
                                    </td>
                                    <td>{{ $item['total_purchased'] }}
                                    </td>
                                <tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


@endsection
