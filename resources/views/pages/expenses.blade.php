@extends('layout.index')
@section('title', 'Expenses')
@section('content')
    <div class="body">
        <div class="add-btn">
            <button class="btn btn-add">
                Add Expenses
            </button>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Testing</td>
                        <td>1000</td>
                        <td>2022/02/10</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
