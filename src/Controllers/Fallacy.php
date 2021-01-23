<?php
namespace Fallacy\Controllers;

use Illuminate\Http\Request;
use Fallacy\Controllers\FallacyGame;

class Fallacy extends FallacyGame
{
    
    protected function customNodePrint(&$curr = null)
    {
        $ret = '';
        $nID = $curr->nID;
        if ($nID == 72) {
            $ret .= $this->printFallacyList($nID);
        } elseif ($nID == 75) {
            $ret .= $this->printFallacyListGeneralIntro($nID);
        } elseif ($nID == 68) {
            $ret .= $this->printEditExampleFallacyResponses($nID);
        }
        return $ret;
    }
    
    /*
    public function getAllPublicCoreIDs($coreTbl = '')
    {
        if (trim($coreTbl) == '') $coreTbl = $GLOBALS["SL"]->coreTbl;
        $this->allPublicCoreIDs = [];
        if ($coreTbl == 'Nonprofit') {
        
        }
        return $this->allPublicCoreIDs;
    }
    */
    
    public function printPreviewReportCustom($isAdmin = false)
    {
        if (!isset($this->sessData->dataSets[$GLOBALS["SL"]->coreTbl])) {
            return '';
        }
        
        
        return '';
    }
    
}
