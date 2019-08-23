<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{


  public function Item($id)
  {
    
    
    
    $post = Post::find($id);
    $post->Item = "XXX";
  
  
    $post->save();
  
    return view('Dashboard.TODO.show')->with('post',$post);
  }



  public function Item2($id)
  {
    $post = Post::find($id);
    $post->Item2 = "XXX";
  
  
    $post->save();
  
    return view('Dashboard.TODO.show')->with('post',$post);
  }


  public function Item3($id)
  {
    $post = Post::find($id);
    $post->Item3 = "XXX";
  
  
    $post->save();
  
    return view('Dashboard.TODO.show')->with('post',$post);
  }

  public function Item4($id)
  {
    $post = Post::find($id);
    $post->Item4 = "XXX";
  
  
    $post->save();
  
    return view('Dashboard.TODO.show')->with('post',$post);
  }

  public function Item5($id)
  {
    $post = Post::find($id);
    $post->Item5 = "XXX";
  
  
    $post->save();
  
    return view('Dashboard.TODO.show')->with('post',$post);
  }


  public function Item6($id)
  {
    $post = Post::find($id);
    $post->Item6 = "XXX";
  
  
    $post->save();
  
    return view('Dashboard.TODO.show')->with('post',$post);
  }


  public function Item7($id)
  {
    $post = Post::find($id);
    $post->Item7 = "XXX";
  
  
    $post->save();
  
    return view('Dashboard.TODO.show')->with('post',$post);
  }


  public function Item8($id)
  {
    $post = Post::find($id);
    $post->Item8 = "XXX";
  
  
    $post->save();
  
    return view('Dashboard.TODO.show')->with('post',$post);
  }

  public function Item9($id)
  {
    $post = Post::find($id);
    $post->Item9 = "XXX";
  
  
    $post->save();
  
    return view('Dashboard.TODO.show')->with('post',$post);
  }

  public function Item10($id)
  {
    $post = Post::find($id);
    $post->Item10 = "XXX";
  
  
    $post->save();
  
    return view('Dashboard.TODO.show')->with('post',$post);
  }

  public function Item11($id)
  {
    $post = Post::find($id);
    $post->Item11 = "XXX";
  
  
    $post->save();
  
    return view('Dashboard.TODO.show')->with('post',$post);
  }

  public function Item12($id)
  {
    $post = Post::find($id);
    $post->Item12 = "XXX";
  
  
    $post->save();
  
    return view('Dashboard.TODO.show')->with('post',$post);
  }

  public function Item13($id)
  {
    $post = Post::find($id);
    $post->Item13 = "XXX";
  
  
    $post->save();
  
    return view('Dashboard.TODO.show')->with('post',$post);
  }

  public function Item14($id)
  {
    $post = Post::find($id);
    $post->Item14 = "XXX";
  
  
    $post->save();
  
    return view('Dashboard.TODO.show')->with('post',$post);
  }

  public function Item15($id)
  {
    $post = Post::find($id);
    $post->Item15 = "XXX";
  
  
    $post->save();
  
    return view('Dashboard.TODO.show')->with('post',$post);
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        // Pagination don't working.
        $posts = Post::orderBy('created_at','desc')->paginate(99);

        $catch = isset($posts);
        
        return view('Dashboard.TODO.todo')->with('posts',$posts);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashboard.TODO.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'item' => 'required'
        ]);

        $post = new Post; 
        $post->List = $request->input('title');
        $post->Item = $request->input('item');
        

        if ($request->input('item2') === null) {
            $post->Item2 = "XXX";
          }

        else
        {
            $post->Item2 = $request->input('item2');
        }  

        if ($request->input('item3') === null) {
            $post->Item3 = "XXX";
          }

        else
        {
            $post->Item3 = $request->input('item3');
        }  


        if ($request->input('item4') === null) {
            $post->Item4 = "XXX";
          }

        else
        {
            $post->Item4 = $request->input('item4');
        }  

        if ($request->input('item5') === null) {
            $post->Item5 = "XXX";
          }

        else
        {
            $post->Item5 = $request->input('item5');
        }  

        if ($request->input('item6') === null) {
            $post->Item6 = "XXX";
          }

        else
        {
            $post->Item6 = $request->input('item6');
        }  

        if ($request->input('item7') === null) {
            $post->Item7 = "XXX";
          }

        else
        {
            $post->Item7 = $request->input('item7');
        }  

        if ($request->input('item8') === null) {
            $post->Item8 = "XXX";
          }

        else
        {
            $post->Item8 = $request->input('item8');
        }  

        if ($request->input('item9') === null) {
            $post->Item9 = "XXX";
          }

        else
        {
            $post->Item9 = $request->input('item9');
        }  

        if ($request->input('item10') === null) {
            $post->Item10 = "XXX";
          }

        else
        {
            $post->Item10 = $request->input('item10');
        }  

        if ($request->input('item11') === null) {
            $post->Item11 = "XXX";
          }

        else
        {
            $post->Item11 = $request->input('item11');
        }  

        if ($request->input('item12') === null) {
            $post->Item12 = "XXX";
          }

        else
        {
            $post->Item12 = $request->input('item12');
        }  

        if ($request->input('item13') === null) {
            $post->Item13 = "XXX";
          }

        else
        {
            $post->Item13 = $request->input('item13');
        }  

        if ($request->input('item14') === null) {
            $post->Item14 = "XXX";
          }

        else
        {
            $post->Item14 = $request->input('item14');
        }  

        if ($request->input('item15') === null) {
            $post->Item15 = "XXX";
          }

        else
        {
            $post->Item15 = $request->input('item15');
        }  

        if ($request->input('item15') === null) {
            $post->Item15 = "XXX";
          }

        else
        {
            $post->Item15 = $request->input('item15');
        }
        
        if ($request->input('share') === null) {
          $post->Share = "XXX";
        }

        else
        {
          $post->Share = $request->input('share');
        }
    
        if ($request->input('share2') === null) {
          $post->Share2 = "XXX";
        }

        else
        {
          $post->Share2 = $request->input('share2');
        }
        
        if ($request->input('share3') === null) {
          $post->Share3 = "XXX";
        }

        else
        {
          $post->Share3 = $request->input('share');
        } 

        $post->User = app('Illuminate\Contracts\Auth\Guard')->user()->name;
        $post->Statement = $request->input('statement');
        $post->save();

        return view('Dashboard.TODO.show')->with('post',$post);


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
        return view('Dashboard.TODO.show')->with('post',$post);
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
        return view('Dashboard.TODO.edit')->with('post',$post);
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
        $this->validate($request, [
            'title' => 'required',
            'item' => 'required'
        ]);

        $post = Post::find($id);
        $post->List = $request->input('title');
        $post->Item = $request->input('item');

        if ($request->input('item2') === null) {
            $post->Item2 = "XXX";
          }

        else
        {
            $post->Item2 = $request->input('item2');
        }  

        if ($request->input('item3') === null) {
            $post->Item3 = "XXX";
          }

        else
        {
            $post->Item3 = $request->input('item3');
        }  


        if ($request->input('item4') === null) {
            $post->Item4 = "XXX";
          }

        else
        {
            $post->Item4 = $request->input('item4');
        }  

        if ($request->input('item5') === null) {
            $post->Item5 = "XXX";
          }

        else
        {
            $post->Item5 = $request->input('item5');
        }  

        if ($request->input('item6') === null) {
            $post->Item6 = "XXX";
          }

        else
        {
            $post->Item6 = $request->input('item6');
        }  

        if ($request->input('item7') === null) {
            $post->Item7 = "XXX";
          }

        else
        {
            $post->Item7 = $request->input('item7');
        }  

        if ($request->input('item8') === null) {
            $post->Item8 = "XXX";
          }

        else
        {
            $post->Item8 = $request->input('item8');
        }  

        if ($request->input('item9') === null) {
            $post->Item9 = "XXX";
          }

        else
        {
            $post->Item9 = $request->input('item9');
        }  

        if ($request->input('item10') === null) {
            $post->Item10 = "XXX";
          }

        else
        {
            $post->Item10 = $request->input('item10');
        }  

        if ($request->input('item11') === null) {
            $post->Item11 = "XXX";
          }

        else
        {
            $post->Item11 = $request->input('item11');
        }  

        if ($request->input('item12') === null) {
            $post->Item12 = "XXX";
          }

        else
        {
            $post->Item12 = $request->input('item12');
        }  

        if ($request->input('item13') === null) {
            $post->Item13 = "XXX";
          }

        else
        {
            $post->Item13 = $request->input('item13');
        }  

        if ($request->input('item14') === null) {
            $post->Item14 = "XXX";
          }

        else
        {
            $post->Item14 = $request->input('item14');
        }  

        if ($request->input('item15') === null) {
            $post->Item15 = "XXX";
          }

        else
        {
            $post->Item15 = $request->input('item15');
        }  

                
        if ($request->input('share') === null) {
          $post->Share = "XXX";
        }

        else
        {
          $post->Share = $request->input('share');
        }
    
        if ($request->input('share2') === null) {
          $post->Share2 = "XXX";
        }

        else
        {
          $post->Share2 = $request->input('share2');
        }
        
        if ($request->input('share3') === null) {
          $post->Share3 = "XXX";
        }

        else
        {
          $post->Share3 = $request->input('share3');
        } 


        $post->Statement = $request->input('statement');
        $post->save();

        return view('Dashboard.TODO.show')->with('post',$post);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/Dashboard')->with('success','Votre article à été supprimer.');
    }
}
