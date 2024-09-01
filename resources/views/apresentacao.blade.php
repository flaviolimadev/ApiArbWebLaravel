@extends('_layouts.base')

@section('main')
<style>
    ol {
        list-style-type: none; /* Remove os números */
    }
</style>

<div class="col" style="margin-top: 3%;">
    
        @foreach($operacoes as $opp)
        @if($opp->quando)
    
            <div style="text-align: left;">
                <span><strong><h4>{{ number_format(floatval($opp->lucro)/100, 2) }} %</strong></h4> 
                <li></strong>{{ \Carbon\Carbon::parse($opp->quando)->format('d/m') }} ás {{ \Carbon\Carbon::parse($opp->quando)->format('H:i') }}</span></li>
                
                <li><strong>{{ $opp->esport }}</strong> - {{ $opp->evento }}</li>
                <br>
                <li><a href=""><strong>Casa 01:</strong>{{ $opp->casa01 }}</a></li>
                <ol>
                    <li>{{ $opp->mercado01 }}</li>
                    <li>{{ $opp->descricao01 }}</li>
                    @if($opp->minorc01)<li>{{ $opp->minorc01 }}</li>@endif
                    <li><strong>@ {{ number_format($opp->Odd01/100,2) }}</strong></li>
                </ol>
                <li><a href=""><strong>Casa 02:</strong>{{ $opp->casa02 }}</a></li>
                <ol>
                    <li>{{ $opp->mercado02 }}</li>
                    <li>{{ $opp->descricao02 }}</li>
                    @if($opp->minorc02)<li>{{ $opp->minorc02 }}</li>@endif
                    <li><strong>@ {{ number_format($opp->Odd02/100,2) }}</strong></li>
                </ol>
                
                

               <hr>
            </div>

        @endif
        @endforeach
    </table>
</div>
@endsection