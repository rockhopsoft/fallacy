<?php
namespace Fallacy\Controllers;

use Illuminate\Http\Request;
use App\Models\SLDefinitions;
use Fallacy\Controllers\FallacyUtils;

class FallacyPages extends FallacyUtils
{
    public function printFallacyList($nID)
    {
        $this->loadFallacyList();
        return view(
            'vendor.fallacy.nodes.72-fallacy-list', 
            $this->v
        )->render();
    }

    public function printFallacyListGeneralIntro($nID)
    {
        if (isset($this->allNodes[$nID]) 
            && isset($this->allNodes[$nID]->nodeRow)
            && isset($this->allNodes[$nID]->nodeRow->NodePromptText)) {
            return $GLOBALS["SL"]->printAccordian(
                'General Introduction to Fallacies and Arguments',
                $this->allNodes[$nID]->nodeRow->NodePromptText,
                false,
                true
            );
        }
        return '';
    }


}