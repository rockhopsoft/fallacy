<!-- resources/views/vendor/fallacy/nodes/68-all-fallacy-responses.blade.php -->
<div id="node68" class="nodeWrap">
    <div class="nodeHalfGap"></div>

    <div id="nLabel68" class="nPrompt">
        <b>Which logical fallacy, or few main fallacies is this an example of?</b> 
        <span class="rqd"><nobr>*required</nobr></span>
    </div>
    <div class="nFld" style="margin-top: 12px;">

    @forelse ($fallacyList as $f => $fal)
        <div class="disBlo">
            <div class="row">
                <div class="col-10">
                    <label for="n{{ $nID }}fld{{ $f }}" id="n{{ $nID }}fld{{ $f }}lab" 
                        class=" finger ">
                        <div class="disIn mR5">
                            <input id="n{{ $nID }}fld{{ $f }}" value="{{ $fal->FalID }}" 
                                type="checkbox" name="n{{ $nID }}fld[]" data-nid="{{ $nID }}"
                                tabindex="{{ (4+$f) }}" autocomplete="off"
                                class="nCbox{{ $nID }} slTab slNodeChange ntrStp" >
                        </div>
                        {!! str_replace('of a Belief', 'of <nobr>a Belief</nobr>', 
                            str_replace('Cause and Effect', 'Cause <nobr>and Effect</nobr>', 
                            str_replace('Common Cause', '<nobr>Common Cause</nobr>', 
                            str_replace('a Right', '<nobr>a Right</nobr>', 
                            $fal->FalEnglish)))) !!}
                    </label>
                </div>
                <div class="col-2">
                    <div class="mT3">
                        <a id="hidivBtnFalDesc{{ $fal->FalID }}" href="javascript:;"
                            class="hidivBtn btn btn-secondary btn-block" 
                            onClick="return loadFallacyDesc({{ $fal->FalID }});"
                            ><div class="mT5"><i class="fa fa-question-circle fPerc125" 
                                aria-hidden="true"></i></div></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="hidivFalDesc{{ $fal->FalID }}" class="disNon w100">
            <div id="fallacyDesc{{ $fal->FalID }}" class="fallacyDesc brdDotGry"></div>
            <div class="pT15"></div>
        </div>
        <div class="pT15"></div>
    @empty
    @endforelse

    </div>
    <div class="nodeHalfGap"></div>
</div>
<style>
.fallacyDesc {
    width: 100%;
    height: 240px;
    overflow-y: scroll;
    padding: 20px;
}
</style>