@extends('layout.index')
@section('title', 'Expenses')
<style>
    .wrapper .body .row .col .add-btn{
        margin-left: auto;
        display: block;
        width: 10rem;
        cursor: pointer;
    }
    .wrapper .body .row table{
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
    }
    .wrapper .body .row table th, td {
        text-align: center;
        padding: 8px;
    }
    tr:nth-child(even){background-color: #f2f2f2}
    .wrapper .body .row.table{
        overflow-x: auto;
        padding: 10px;
        box-shadow: 1px 3px 6px dimgrey;
        border-radius: 10px;
        margin-top: 20px !important;
    }
</style>
@section('content')
    @include('pages.parts.modal')
    <div class="body">
        <div class="row">
            <div class="col">
                <button class="add-btn" onclick="show_modal()">Add Expenses</button>
            </div>
        </div>
        <div class="row table">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Details</th>
                    <th>Date</th>
                </tr>
                <tr>
                    <td>Testing</td>
                    <td>100</td>
                    <td>2</td>
                    <td>200</td>
                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi exercitationem facilis fuga eos nesciunt ex soluta. Voluptates, cum repudiandae? Ex minus similique dolores! Eligendi libero aliquid vitae quidem quisquam recusandae!</td>
                    <td>2022/10/23</td>
                </tr>
                <tr>
                    <td>Testing</td>
                    <td>100</td>
                    <td>2</td>
                    <td>200</td>
                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi exercitationem facilis fuga eos nesciunt ex soluta. Voluptates, cum repudiandae? Ex minus similique dolores! Eligendi libero aliquid vitae quidem quisquam recusandae!</td>
                    <td>2022/10/23</td>
                </tr>
                <tr>
                    <td>Testing</td>
                    <td>100</td>
                    <td>2</td>
                    <td>200</td>
                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi exercitationem facilis fuga eos nesciunt ex soluta. Voluptates, cum repudiandae? Ex minus similique dolores! Eligendi libero aliquid vitae quidem quisquam recusandae!</td>
                    <td>2022/10/23</td>
                </tr>
                <tr>
                    <td>Testing</td>
                    <td>100</td>
                    <td>2</td>
                    <td>200</td>
                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi exercitationem facilis fuga eos nesciunt ex soluta. Voluptates, cum repudiandae? Ex minus similique dolores! Eligendi libero aliquid vitae quidem quisquam recusandae!</td>
                    <td>2022/10/23</td>
                </tr>
                <tr>
                    <td>Testing</td>
                    <td>100</td>
                    <td>2</td>
                    <td>200</td>
                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi exercitationem facilis fuga eos nesciunt ex soluta. Voluptates, cum repudiandae? Ex minus similique dolores! Eligendi libero aliquid vitae quidem quisquam recusandae!</td>
                    <td>2022/10/23</td>
                </tr>
                <tr>
                    <td>Testing</td>
                    <td>100</td>
                    <td>2</td>
                    <td>200</td>
                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi exercitationem facilis fuga eos nesciunt ex soluta. Voluptates, cum repudiandae? Ex minus similique dolores! Eligendi libero aliquid vitae quidem quisquam recusandae!</td>
                    <td>2022/10/23</td>
                </tr>
                <tr>
                    <td>Testing</td>
                    <td>100</td>
                    <td>2</td>
                    <td>200</td>
                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi exercitationem facilis fuga eos nesciunt ex soluta. Voluptates, cum repudiandae? Ex minus similique dolores! Eligendi libero aliquid vitae quidem quisquam recusandae!</td>
                    <td>2022/10/23</td>
                </tr>
                <tr>
                    <td>Testing</td>
                    <td>100</td>
                    <td>2</td>
                    <td>200</td>
                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi exercitationem facilis fuga eos nesciunt ex soluta. Voluptates, cum repudiandae? Ex minus similique dolores! Eligendi libero aliquid vitae quidem quisquam recusandae!</td>
                    <td>2022/10/23</td>
                </tr>
                <tr>
                    <td>Testing</td>
                    <td>100</td>
                    <td>2</td>
                    <td>200</td>
                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi exercitationem facilis fuga eos nesciunt ex soluta. Voluptates, cum repudiandae? Ex minus similique dolores! Eligendi libero aliquid vitae quidem quisquam recusandae!</td>
                    <td>2022/10/23</td>
                </tr>
                <tr>
                    <td>Testing</td>
                    <td>100</td>
                    <td>2</td>
                    <td>200</td>
                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi exercitationem facilis fuga eos nesciunt ex soluta. Voluptates, cum repudiandae? Ex minus similique dolores! Eligendi libero aliquid vitae quidem quisquam recusandae!</td>
                    <td>2022/10/23</td>
                </tr>
                <tr>
                    <td>Testing</td>
                    <td>100</td>
                    <td>2</td>
                    <td>200</td>
                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi exercitationem facilis fuga eos nesciunt ex soluta. Voluptates, cum repudiandae? Ex minus similique dolores! Eligendi libero aliquid vitae quidem quisquam recusandae!</td>
                    <td>2022/10/23</td>
                </tr>
                <tr>
                    <td>Testing</td>
                    <td>100</td>
                    <td>2</td>
                    <td>200</td>
                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi exercitationem facilis fuga eos nesciunt ex soluta. Voluptates, cum repudiandae? Ex minus similique dolores! Eligendi libero aliquid vitae quidem quisquam recusandae!</td>
                    <td>2022/10/23</td>
                </tr>
            </table>
        </div>
        {{-- Transactions --}}
        @include('pages.parts.template_transactions')
    </div>
@endsection
