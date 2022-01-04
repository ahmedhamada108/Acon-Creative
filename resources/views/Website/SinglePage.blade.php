@extends('layouts.master')
@section('mastercontent')
    <section class="u-clearfix u-section-1" id="sec-5a7e">
            <div class="u-clearfix u-sheet u-sheet-1">
                @foreach($Services1 as $Service)
                @if(Str::substr(URL::current(),-2)=='EN')
                    <h1 class="u-align-center u-text u-text-custom-color-4 u-text-1" style="margin: 0 !important;">{{$Service->name_en}}</h1>
                    <div style="width: 26%;" class="u-align-left u-absolute-hcenter u-border-3 u-border-custom-color-4 u-line u-line-horizontal u-line-1"></div>
                    <h3 class="u-align-right u-text u-text-2" style="margin: 0 !important;">
                        @php echo htmlspecialchars_decode($Service->content_en); @endphp
                    </h3>
                @elseif(Str::substr(URL::current(),-2)=='AR')
                    <h1 class="u-align-center u-text u-text-custom-color-4 u-text-1"style="margin: 0 !important;">{{$Service->name_ar}}</h1>
                    <div style="width: 20%;" class="u-absolute-hcenter u-border-3 u-border-custom-color-4 u-line u-line-horizontal u-line-1"></div>
                    <h3 class="u-align-center u-text u-text-2" style="margin: 0 !important;">
                        @php echo htmlspecialchars_decode($Service->content_ar); @endphp

                    </h3>
                @elseif(Str::substr(URL::current(),-2)=='AR')
                    <h1 class="u-align-right u-text u-text-custom-color-4 u-text-1"style="margin: 0 !important;">{{$Service->name_ar}}</h1>
                    <div class="u-absolute-hcenter u-border-3 u-border-custom-color-4 u-line u-line-horizontal u-line-1"></div>
                    <h3 class="u-align-center u-text u-text-2" style="margin: 0 !important;">
                        @php echo htmlspecialchars_decode($Service->content_ar); @endphp

                    </h3>
                @endif
                @endforeach
            </div>
    </section>
@endsection
