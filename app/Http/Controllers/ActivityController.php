<?php

namespace App\Http\Controllers;

use App\Models\ActivityRecord;
use DB;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index(){
        
            //List bulletin for committee
          $activities = ActivityRecord::all(); //->toArray();
          
          return view('ManageActivity.activityListCommitteePage', compact('activities'));

            //List bulletin for users
            // $activities = ActivityRecord::all(); //->toArray();
            
            // return view('ManageActivity.activityListUsersPage', compact('activities'));
    
    }

        //Create data to database
    public function create(){
        return view('ManageActivity.addActivityPage');
    }

    public function store(Request $request){
        $input = new ActivityRecord;

        $input->activity_title = $request->activity_title;
        $input->activity_dateStart = $request->activity_dateStart;
        $input->activity_dateEnd = $request->activity_dateEnd;
        $input->activity_timeStart = $request->activity_timeStart;
        $input->activity_timeEnd = $request->activity_timeEnd;
        $input->activity_location = $request->activity_location;
        $input->activity_participation = $request->activity_participation;
        $input->activity_description = $request->activity_description;
        
        
        $input->save();

        return redirect('activityListCommitteePage')->with('success', 'New Activity Successfully Added!');

    }

    //show activities
    public function show($ActivityID){


         $activities = ActivityRecord::find($ActivityID);
         return view('ManageActivity.activityDetailsCommitteePage')->with('activities', $activities);
         
    }

    public function edit($ActivityID){
        $activities = ActivityRecord::find($ActivityID);
        return view('ManageActivity.editActivityPage', compact('activities'));
    }

    public function update(Request $request, $ActivityID){
        $activities = ActivityRecord::find($ActivityID);
        $input = $request->all();
        $activities->update($input);

        return redirect('activityListCommitteePage')->with('success', 'Activity Updated!'); 
   }

    public function destroy($ActivityID){
        $activity = ActivityRecord::find($ActivityID);
        $activity->delete();
        return redirect('activityListCommitteePage')->with('success', 'Activity Deleted!');  
    }

    //opens student list menu
    public function studentMenu()
    {
        $activities = ActivityRecord::all();
        return view('ManageActivity.activityListUsersPage', compact('activities'));
    }

    //open student view
    public function studentView($ActivityID)
    {
        $activities = ActivityRecord::find($ActivityID);
        return view('ManageActivity.activityDetailsUsersPage')->with('activities', $activities);
        // $activities = ActivityRecord::all();
        // return view('ManageActivity.activityListUsersPage', compact('activities'));
    }
}
