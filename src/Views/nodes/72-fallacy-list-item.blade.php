<!-- resources/views/vendor/fallacy/nodes/72-fallacy-list-item.blade.php -->
@if (isset($fal) && $fal)
    <div class="mTn15 mB10"><b>
    @if (isset($fal->FalLatin) && trim($fal->FalLatin) != '')
        <i>{{ $fal->FalLatin }}</i>
    @endif
    @if (isset($fal->FalAka) && trim($fal->FalAka) != '')
        @if (isset($fal->FalLatin) && trim($fal->FalLatin) != '') - @endif
        {!! $fal->FalAka !!}
    @endif
    </b>
    @if ((isset($fal->FalLatin) && trim($fal->FalLatin) != '')
        || (isset($fal->FalAka) && trim($fal->FalAka) != ''))
        <br />
    @endif
    @if (isset($fal->FalCategoryDesc) && trim($fal->FalCategoryDesc) != '')
        {!! $fal->FalCategoryDesc !!}<br />
    @endif
    </div><hr>
    @if (isset($fal->FalDesc) && trim($fal->FalDesc) != '')
        {!! $fal->FalDesc !!}
    @endif
    @if (isset($fal->video) && trim($fal->video) != '')
        <div class="pT15 pB15">{!! $fal->video !!}</div>
    @endif
@endif
