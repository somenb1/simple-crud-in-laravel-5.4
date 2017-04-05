<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
//include model to store
use App\post;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //Get all the recordrs from posts table thorough Post model
        $posts = Post::all();
        //Then return to app/index.blade.php in view along with all the data stored in postes
        return view('app.index', compact('posts'));
    
        return view('page', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //It will simply redirect to the app/create.blade.php where the form is present 
        return view('app.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Validate Data
        /*$this->validate($request, [
        'title' => 'required',
        'content' => 'required',
        ]);*/

        //store data
        $post = new post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        
        //After storing redirect to /app
        return redirect('/app');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('app.post', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('app.editpost', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate
        /*$this->validate($request, [
        'title' => 'required',
        'content' => 'required',
        ]);*/

        //store
        $post = Post::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        //return with a success message
        return redirect('/app/manage')->with('status', 'Updated successfuly!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //take the id 
        $post = Post::find($id);

        //and delete everything associated with that ID 
        $post->delete();

        //reture to manage.blade.php with a success method.
        return redirect('/app/manage')->with('status', 'Deleted successfuly!');
    }

     /**
     * Custom Controller Method.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage()
    {
        $posts = Post::all();

        return view('app.manage', compact('posts'));
    }
}
