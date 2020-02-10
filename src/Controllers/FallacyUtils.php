<?php
namespace Fallacy\Controllers;

use Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\FAFallacies;
use SurvLoop\Controllers\Tree\TreeSurvForm;

class FallacyUtils extends TreeSurvForm
{
    
    public $classExtension = 'Fallacy';
    public $treeID         = 1;
    
    // Initializing a bunch of things which are not [yet] automatically determined by the software
    /*
    protected function initExtra(Request $request)
    {
        // Establishing Main Navigation Organization, with Node ID# and Section Titles
        $this->majorSections = [];
        return true;
    }
    */
        
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

    protected function loadFallacyList()
    {
        if (!isset($this->v["fallacyList"])) {
            $this->v["fallacyList"] = FAFallacies::orderBy('FalEnglish', 'asc')
                ->get();
        }
        return true;
    }

    protected function loadFallacyDescJs()
    {
        $this->loadFallacyList();
        $java = view(
            'vendor.fallacy.js-fallacy-descs', 
            $this->v
        )->render();
        Storage::put('fallacy/fallacy-descs.js', $java);
        return true;
    }

    public function getFallacyDescJs(Request $request)
    {
        $expires = (60*60*24*3); // expires every three days
        if (!Storage::exists('fallacy/fallacy-descs.js')
            || $GLOBALS["SL"]->REQ->has('refresh')) {
            $this->loadFallacyDescJs();
        }
        $response = Response::make(Storage::get('fallacy/fallacy-descs.js'));
        $response->header('Content-Type', 'application/javascript');
        $response->header('Cache-Control', 'public, max-age="' . $expires . '"');
        $response->header('Expires', gmdate('r', time()+$expires));
        return $response;
    }


}
