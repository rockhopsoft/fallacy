<?php
namespace Fallacy\Controllers;

use DB;
use Auth;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\SLDefinitions;

use Fallacy\Controllers\FallacyReport;
use SurvLoop\Controllers\AdminSubsController;

class FallacyAdmin extends AdminSubsController
{
    public $classExtension = 'FallacyAdmin';
    public $treeID         = 1;
    
    public function initPowerUser($uID = -3)
    {
        if (!$this->v["user"] || intVal($this->v["user"]->id) <= 0
            || !$this->v["user"]->hasRole('administrator|staff|databaser|brancher|volunteer')) {
            return redirect('/');
        }
        return [];
    }
    
    protected function initExtra(Request $request)
    {
        $this->CustReport = new FallacyReport($request);
        
        
        return true;
    }
    
    public function loadAdmMenu()
    {
        $treeMenu = [];
        if ($this->v["user"]->hasRole('administrator|staff|databaser|brancher|volunteer')) {
            $treeMenu[] = $this->admMenuLnk('javascript:;', 'Fallacies', 
                '<i class="fa fa-building-o" aria-hidden="true"></i>', 1, [
                $this->admMenuLnk('javascript:;', 'All Fallacy Examples'),
                $this->admMenuLnk('javascript:;', 'Manage Fallacies')
                ]);
            if (!$this->v["user"]->hasRole('volunteer')) return $this->addAdmMenuBasics($treeMenu);
        }
        return $treeMenu;
    }
    
}
