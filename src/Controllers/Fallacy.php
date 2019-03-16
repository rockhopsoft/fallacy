<?php
namespace Fallacy\Controllers;

use DB;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Models\User;

use Fallacy\Controllers\FallacyReport;
use SurvLoop\Controllers\TreeSurvForm;

class Fallacy extends TreeSurvForm
{
    
    public $classExtension = 'Fallacy';
    public $treeID         = 1;
    
    // Initializing a bunch of things which are not [yet] automatically determined by the software
    protected function initExtra(Request $request)
    {
        // Establishing Main Navigation Organization, with Node ID# and Section Titles
        $this->majorSections = [];
        return true;
    }
        
    // Initializing a bunch of things which are not [yet] automatically determined by the software
    protected function loadExtra()
    {
        return true;
    }
    
    protected function isPublic()
    {
        return false;
    }
    
    public function isPublished($coreTbl, $coreID, $coreRec = NULL)
    {
        return false;
    }
    
    protected function recordIsEditable($coreTbl, $coreID, $coreRec = NULL)
    {
        return $this->v["isAdmin"];
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
    
    protected function customNodePrint($nID = -3, $tmpSubTier = [], $nIDtxt = '', $nSffx = '', $currVisib = 1)
    {
        $ret = '';
        if ($nID == 1) {
            
        }
        return $ret;
    }
    
    public function printPreviewReportCustom($isAdmin = false)
    {
        if (!isset($this->sessData->dataSets[$GLOBALS["SL"]->coreTbl])) return '';
        
        
        return '';
    }
    
}
