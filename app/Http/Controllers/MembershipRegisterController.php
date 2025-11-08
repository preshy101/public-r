<?php

namespace App\Http\Controllers;

use App\Models\Publications;
use Illuminate\Http\Request;
use App\Models\MembershipRegister;
use App\Models\examInfo;
use App\Models\imageGallery;
use App\Models\Training;
use App\Models\TrainingContent;

class MembershipRegisterController extends Controller
{
    public function index(){
        return view('livewire.member.member-registry');
    }
    public function tribute(){
        return view('livewire.member.tribute');
    }
    public function uploadView(){
        return view('livewire.member.upload-membership-register');
    }
    public function searchMembership(Request $request){
        $search = $request->validate([
            'search' => 'required'
        ]);

        $result = MembershipRegister::where('LAST_NAME', $request->search)->first();
        if ($result == null) {
            $result = MembershipRegister::where('FIRST_NAME', $request->search)->first();
        }
        if ($result == null) {
            $result = MembershipRegister::where('PRACTICE_ID', $request->search)->first();
        }
        if ($result == null) {
            $result = MembershipRegister::where('PHONE', $request->search)->first();
        }
        if ($result == null) {
            $result = MembershipRegister::where('EMAIL', $request->search)->first();
        }
        if ($result) {
            session()->flash('result', $result);
        }else{

         session()->flash('error', "No Record found!");
        }
        return redirect()->back();
    }
    public function confirm(string $id)  {
        MembershipRegister::findOrFail($id)->update(['Confirmed' => 'Yes']);
        session()->flash('success', 'Membership Record Confirmed successfully');
        return redirect()->back();
    }
    public function publication(){
        $publications = Publications::where('status', true)->latest()->paginate(1);

        return view('livewire.publication.index', compact('publications'));
    }
    public function exmPublication(){
        $publications = examInfo::where('status', true)->latest()->paginate(1);

        return view('livewire.publication.exam_info', compact('publications'));
    }
    public function viewTraining(  $item_id){
        $content = TrainingContent::find($item_id);
        $training = Training::with('tContent')->where('id',$content->training_id)->first();
        return view('livewire.training.training',[
            'content' => $content,
            'training' => $training
        ]);
    }

    public function allVideos($id){
        $videos = imageGallery::with('cms')->where('cms_id', $id)->get();
        return view('livewire.resources.resource-video-view', compact('videos'));
    }
}

