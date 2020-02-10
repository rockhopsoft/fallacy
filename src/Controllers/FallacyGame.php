<?php
namespace Fallacy\Controllers;

use Illuminate\Http\Request;
use App\Models\SLNodeResponses;
use Fallacy\Controllers\FallacyPages;

class FallacyGame extends FallacyPages
{
    protected function printEditExampleFallacyResponses($nID)
    {
        $this->loadFallacyList();
        if (!$this->v["fallacyList"] || sizeof($this->v["fallacyList"]) <= 0) {
            return '<p><i>404 Fallacies Not Found</i></p>';
        }
        $this->v["nID"] = $nID;
        return view(
            'vendor.fallacy.nodes.68-all-fallacy-responses', 
            $this->v
        )->render();
    }

    
}