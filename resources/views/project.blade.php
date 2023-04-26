@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Projects') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Your projects') }}</div>

                <div class="card-body">
                    <div>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium perferendis quibusdam velit tenetur ullam doloremque illo, porro, in soluta optio voluptatibus, incidunt nobis error eligendi minima ipsa eaque impedit aut et eius culpa dolores libero corporis beatae! Quos, cumque. Optio corrupti vero ipsam nihil harum, illum odio natus sapiente provident.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection