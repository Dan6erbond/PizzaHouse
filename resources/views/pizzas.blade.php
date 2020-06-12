@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>

        {{-- @for ($i = 0; $i < 5; $i++)
            <p>The value of i is {{ $i }}.</p>
        @endfor --}}

        @foreach ($pizzas as $pizza)
            <div>
                {{ $loop->index+1 }}) {{ $pizza['type'] }} - {{ $pizza['base'] }} - ${{ $pizza['price'] }}

                @if($loop->first)
                    <span>- First</span>
                @endif

                @if ($loop->last)
                    <span>- Last</span>
                @endif
            </div>
        @endforeach
    </div>
</div>
@endsection
