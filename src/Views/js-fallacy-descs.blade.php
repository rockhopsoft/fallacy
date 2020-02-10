/* resources/views/vendor/fallacy/js-fallacy-descs.blade.php */

var currFallacy = 0;
var fallacyDescs = new Array();
var loadedFallacies = false;

function loadFallacyDesc(falID) {
    if (currFallacy != falID && fallacyDescs[falID]) {
        if (document.getElementById("fallacyDesc"+falID+"")) {
            if (document.getElementById("fallacyDesc"+falID+"").innerHTML.trim() == '') {
                document.getElementById("fallacyDesc"+falID+"").innerHTML = fallacyDescs[falID];
                document.getElementById("fallacyDesc"+falID+"").focus();
            }
        } else if (document.getElementById("fallacyDetails")) {
            if (document.getElementById("fallacyDetails").innerHTML.trim() == '') {
                document.getElementById("fallacyDetails").innerHTML = fallacyDescs[falID];
                document.getElementById("fallacyDetails"+falID+"").focus();
            }
        }
        currFallacy = falID;
    }
    return false;
}

$(document).ready(function(){
    
    $(document).on("click", ".onChangeFallacy", function() {
        loadFallacyDesc($(this).val());
    });
    $(document).on("click", ".falInfo", function() {
        loadFallacyDesc($(this).attr("data-fal-typ"));
    });
    
});

function autoLoadFallacyDescs() {
    if (!loadedFallacies && document.getElementById("node68")) {
        loadedFallacies = true;
        loadFallacyDescs();
        for (var f = 0; f < {{ sizeof($fallacyList) }}; f++) {
            if (document.getElementById("n68fld"+f+"")) {
                $( "#n68fld"+f+"" ).addClass( "onChangeFallacy" );
            }
        }
        console.log("Fallacy Desciptions Auto-Loaded");
    }
    return true;
}
setTimeout("autoLoadFallacyDescs()", 100);
setTimeout("autoLoadFallacyDescs()", 1000);
setTimeout("autoLoadFallacyDescs()", 3000);
setTimeout("autoLoadFallacyDescs()", 6000);
setTimeout("autoLoadFallacyDescs()", 10000);

function loadFallacyDescs() {
    fallacyDescs = new Array();
@forelse ($fallacyList as $f => $fal)
    fallacyDescs[{{ $fal->FalID }}] = {!! json_encode(
        '<div class="pB10"><h5>' . $fal->FalEnglish . '</h5></div>' . view(
            'vendor.fallacy.nodes.72-fallacy-list-item', 
            [ 'fal' => $fal ]
        )->render() ) !!};
@empty
@endforelse
    return true;
}