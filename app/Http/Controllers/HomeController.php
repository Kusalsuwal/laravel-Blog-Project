<?php

namespace App\Http\Controllers;

use App\Http\Requests\BstoreRequest;
use App\Http\Requests\StoreRequest;
use App\Models\User;
use App\Models\_blogpost;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Metadata\Annotation\Parser\DocBlock;

class HomeController extends Controller
{

    public function Login()
    {
        return view('Account.Login');
    }
    public function welcome()
    {
        $_blogposts = Blog::all();
        return view('welcome', compact('_blogposts'));
    }
    public function Slogin(Request $request)
    {
        // dd($request->all());
        $username = $request->input('username');
        $password = $request->input('password');

        $user = User::where('username', $username)->first();

        if ($user && Hash::check($password, $user->password)) {
            Auth::login($user);
            return redirect()->route('Dashboard');
        } else {
            return redirect()->route('Login')->with('error', 'Invalid username or password.');
        }
    }

    public function Register()
    {
        return view('Account.Register',);
    }
    
    public function userblog($id)

    {
        $blogposts = Blog::find($id);


        return view('Account.userblog',compact('blogposts'));
    }
    public function Dashboard()
    {
        $_blogposts = Blog::all();
        // here only blog whos status is 1 must be plucked

        return view('Account.Dashboard', compact('_blogposts'));
    }
    public function Create()
    {
        
        return view('Account.Create');
    }
    public function store(StoreRequest $request)
    {
        $student = new User;
        $student->name = $request->input('name');
        $student->number = $request->input('number');
        $student->address = $request->input('address');
        $student->email = $request->input('email');
        $student->pan = $request->input('pan');
        $student->username = $request->input('username');
        $student->password = Hash::make($request->input('password'));

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/students/', $filename);
            $student->image = $filename;
        }
    
        $student->save();
    
        return redirect()->route('Login')->with('success', 'Form submitted successfully!');
    }

    public function Bstore(BstoreRequest $request)
{
    $blog = new Blog();

    $blog->title = $request->title;
    $blog->body = $request->body;
    $blog->created_by = auth()->id(); 
    $blog->status = 0; 

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/students'), $filename); 
        $blog->image = $filename;
    }

    $blog->save();

    return redirect()->route('Dashboard')->with('success', 'Post submitted successfully!');
}

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    } 
    // public function index(){
    //     auth->user();
    //     if(aruth->user()->role !=='admin'){
    //         blog were creared by = athuth->user->is        }
    //         else{
    //             blog:all();
    //         }
    // }
    public function index()
{
    $user = auth()->user();
    dd($user);
    if ($user->role !== 'admin') {
        $blogs = Blog::where('created_by', $user->id)->get();
    } else {
        $blogs = Blog::all();
    }
    return view('Dashboard', compact('blogs'));
}

    public function edit($id)
    {
        $data = Blog::findOrFail($id);
        return view('Account.edit', compact('data'));
    }
    public function bloglist()
    {
        $_blogposts = Blog::all();
       
        return view('Account.bloglist',compact('_blogposts'));
    }


    public function update(Request $request, $id)
    {
        // dd($request);
        $data = Blog::findOrFail($id);
        $data->title = $request->title;
        $data->body = $request->body;
     


        if ($request->hasFile('new_image')) {
            if ($data->image) {
                Storage::delete('uploads/students'. $data->image);
            }

            $file = $request->file('new_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/students', $filename);
            $data->image = $filename;
        }

        $data->save();

        return redirect()->route('bloglist')->with('success', 'Data updated successfully.');
    }

}
