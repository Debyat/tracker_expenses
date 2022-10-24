@extends('layout.index')
@section('title', 'Home')
<style>
</style>
@section('content')
   <div class="body" id="budget">
        <div class="row">
                <div class="col">
                    <button class="new_budget">Add New Budget</button>
                </div>
        </div>
        <div class="row">
            <div class="col pc">
                <div class="card">
                    <div class="card-title">
                        <h3>This is the title</h3>
                    </div>
                    <div class="card-body">
                        <p>This is the card body</p>
                    </div>
                </div>
            </div>
            <div class="col pc">
                <div class="card">
                    <div class="card-title">
                        <h3>This is the title</h3>
                    </div>
                    <div class="card-body">
                        <p>This is the card body</p>
                    </div>
                </div>
            </div>
            <div class="col pc">
                <div class="card">
                    <div class="card-title">
                        <h3>This is the title</h3>
                    </div>
                    <div class="card-body">
                        <p>This is the card body</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-title">
                        <h3>This is the title</h3>
                    </div>
                    <div class="card-body">
                        <p>This is the card body</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row budget-search">
            <div class="col">
                <button class="new_budget">Add New Budget</button>
            </div>
            <div class="col search">
                <input type="text" name="" id="">
                <button>Search</button>
            </div>
       </div>


       {{-- Budget Types --}}
        <div class="budget-types">
           <div class="row">
                <div class="col name">Needs</div>
                <div class="col add-btn">
                    <button class="add">Add Needs</button>
                </div>
                <div class="col">
                    <button class="remove">Remove</button>
                </div>
           </div>
            <div class="card">
                <div class="card-title">
                    <h3>This is the title</h3>
                </div>
                <div class="card-body">
                    <p>This is the card body</p>
                </div>
            </div>
        </div>

        {{-- Next Type --}}
        <div class="budget-types">
            <div class="row">
                <div class="col name">Needs</div>
                <div class="col add-btn">
                    <button class="add">Add Needs</button>
                </div>
                <div class="col">
                    <button class="remove">Remove</button>
                </div>
            </div>
            <div class="card">
                <div class="card-title">
                    <h3>This is the title</h3>
                </div>
                <div class="card-body">
                    <p>This is the card body</p>
                </div>
            </div>
        </div>

        {{-- Next Type --}}
        <div class="budget-types">
            <div class="row">
                <div class="col name">Needs</div>
                <div class="col add-btn">
                    <button class="add">Add Needs</button>
                </div>
                <div class="col">
                    <button class="remove">Remove</button>
                </div>
            </div>
            <div class="card">
                <div class="card-title">
                    <h3>This is the title</h3>
                </div>
                <div class="card-body">
                    <p>This is the card body</p>
                </div>
            </div>
        </div>

        {{-- Next Type --}}
        <div class="budget-types">
            <div class="row">
                <div class="col name">Needs</div>
                <div class="col add-btn">
                    <button class="add">Add Needs</button>
                </div>
                <div class="col">
                    <button class="remove">Remove</button>
                </div>
            </div>
            <div class="card">
                <div class="card-title">
                    <h3>This is the title</h3>
                </div>
                <div class="card-body">
                    <p>This is the card body</p>
                </div>
            </div>
        </div>
   </div>
@endsection
