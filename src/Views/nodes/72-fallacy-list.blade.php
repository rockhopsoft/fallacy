<!-- resources/views/vendor/fallacy/nodes/72-fallacy-list.blade.php -->
@forelse ($fallacyList as $f => $fal)
    <div class="pB15">{!! $GLOBALS["SL"]->printAccard(
        $fal->FalEnglish, 
        view(
            'vendor.fallacy.nodes.72-fallacy-list-item', 
            [ 'fal' => $fal ]
        )->render()
    ) !!}</div>
@empty
@endforelse
