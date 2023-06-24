<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Team;
use App\Message;
use App\Project;
use App\Title;
use App\data;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // view
    public function index()
    {
        $ctea = Team::count();
        $cmes = Message::count();
        $cpro = Project::count();
        $cdat = Project::count();
        $tit = Title::all();
        return view('home', [
            'ctea' => $ctea,
            'cmes' => $cmes,
            'cpro' => $cpro,
            'tit' => $tit,
            'cdat' => $cdat
        ]);
    }
    public function team()
    {
        $tea = Team::all();
        $tit = Title::all();
        return view('teamm', [
            'tit' => $tit,
            'tea' => $tea
        ]);
    }
    public function message()
    {
        $mes = Message::all();
        $tit = Title::all();
        return view('message', [
            'tit' => $tit,
            'mes' => $mes
        ]);
    }
    public function projectt()
    {
        $pro = Project::all();
        $tit = Title::all();
        return view('projectt', [
            'tit' => $tit,
            'pro' => $pro
        ]);
    }
    public function title()
    {
        $tit = Title::all();
        $ctit = Title::count();
        return view('title', [
            'tit' => $tit,
            'ctit' => $ctit
        ]);
    }
    public function data()
    {
        $tit = Title::all();
        $data = data::paginate(1);
        return view('data', [
            'tit' => $tit,
            'data' => $data
        ]);
    }
    // add view
    // add save
    public function addteasave(Request $request)
    {
        $new = new Team();
        $new->name = $_POST['name'];
        $new->career = $_POST['career'];
        $image = time(). '.' .$request->image->getClientOriginalExtension();
        $request->image->move(public_path('team'), $image);
        $new->image = $image;
        $new->teleg = $_POST['teleg'];
        $new->insta = $_POST['insta'];
        $new->face = $_POST['face'];
        $new->github = $_POST['github'];
        $new->save();
        return redirect('teamm');
    }
    public function addprosave(Request $request)
    {
        $new = new Project();
        $new->name = $_POST['name'];
        $new->about = $_POST['about'];
        $image = time(). '.' .$request->image->getClientOriginalExtension();
        $request->image->move(public_path('team'), $image);
        $new->image = $image;
        $new->link = $_POST['link'];
        $new->save();
        return redirect('projectt');
    }
    public function adddatsave(Request $request)
    {
        $new = new data();
        $new->location = $_POST['location'];
        $new->email = $_POST['email'];
        $new->call = $_POST['call'];
        $new->online = $_POST['online'];
        $new->save();
        return back();

    }
    public function start(Request $request)
    {
        $new = new Title();
        $new->title = $_POST['title'];
        $new->save();
        return redirect('home');

    }
    // edit view
    public function etea($id)
    {
        $type = 0;
        $get = Team::where('id', $id)->first();
        return view('edit', [
            'get' => $get,
            'type' => $type
        ]);
    }
    public function epro($id)
    {
        $type = 1;
        $get = Project::where('id', $id)->first();
        return view('edit', [
            'get' => $get,
            'type' => $type
        ]);
    }
    public function edat($id){
        $get = data::where('id',$id)->first();
        return view ('editData', [
            'get' => $get
        ]);
    }
    // edit save
    public function editteasave(Request $request, $id)
    {
        $image = time(). '.' .$request->image->getClientOriginalExtension();
        $request->image->move(public_path('team'), $image);
        Team::where('id', $id)->update([
            'name'=>$request->name,
            'career'=>$request->career,
            'image'=>$image,
            'teleg'=>$request->teleg,
            'insta'=>$request->insta,
            'face'=>$request->face,
            'github'=>$request->github
        ]);
        return redirect('teamm');
    }
    public function editprosave(Request $request, $id)
    {
        $image = time(). '.' .$request->image->getClientOriginalExtension();
        $request->image->move(public_path('team'), $image);
        Team::where('id', $id)->update([
            'name'=>$request->name,
            'about'=>$request->about,
            'image'=>$image,
            'link'=>$request->link
        ]);
        return redirect('teamm');
    }
    public function editdatsave(Request $request ,$id)
    {
        data::where('id',$id)->update([
            'location'=>$request->location,
            'email'=>$request->email,
            'call'=>$request->call,
            'online'=>$request->online
        ]);
        return redirect('data');
    }
    public function titup(Request $request ,$id)
    {
        Title::where('id',$id)->update([
            'title'=>$request->title
        ]);
        return redirect('title');
    }
    // delete
    public function dtea($id)
    {
        Team::where('id', $id)->delete();
        return back();
    }
    public function dmes($id)
    {
        Message::where('id', $id)->delete();
        return back();
    }
    public function dpro($id)
    {
        Project::where('id', $id)->delete();
        return back();
    }
    // other
    public function read($id)
    {
        Message::where('id', $id)->update([
            'read'=>1
        ]);
        return back();
    }
    public function ddat ($id)
    {
        data::where('id',$id)->delete();
        return back();
    }
}
