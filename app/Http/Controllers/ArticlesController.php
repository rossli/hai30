<?php

namespace App\Http\Controllers;

use App\User;
use App\Article;
use App\Http\Requests\CreateArticleRequest;
use Carbon\Carbon;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = User::find(5)->article;
        $user = Article::find(1)->user;
        dd($user);
        //$articles = Article::orderBy('published_at','desc')->get();
        $articles = Article::latest()->published( Carbon::now() )->get();
        if ( view()->exists( 'articles.index' ) )
        {
            return view( 'articles.index', compact( 'articles' ) );
        }

        return abort( 404 );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //这里 就是单纯的 显示一个页面就行啦
        return view( 'articles.create' );
    }

    /**
     * Store a newly created resource in storage.
     * 接收POST数据,并保存到数据库,然后进行重定向
     * RossLi 2016-01-14 11:33:12
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store( CreateArticleRequest $request )
    {
        /**
         * Controller  默认有一个 validate() 的方法
         * 因为他 use了一个trait validaterequest
         */
        //$this->validate( $request, [
        //    'title'   => 'required|max:255',
        //    'content' => 'required',
        //],[
        //    'title.required'=>'标题比天大',
        //    'content.required'=>'内容也牛逼',
        //]);

        //这是第二种方法,就是make 了一个实例,三个参数吧
        //@param 接收的数据
        //@param ruler
        //@param messages
        //$validator = Validator::make( $request->all(), [
        //    'title'   => 'required|max:255',
        //    'content' => 'required',
        //], [
        //    'title.required'   => '第二种方法 的题目比天',
        //    'content.required' => '第二中方法的内容必填',
        //] );
        //
        ///*
        // * 这是 一个 钩子函数,验证完毕之后
        // * 调用一个after(),里面有个回调函数,可以再添加一些别的信息什么的
        // */
        //$validator->after( function ( $validator )
        //{
        //    // 这个 somethingElseIsInvalid 就是还有一些别的错误什么的
        //    // 是自定义的方法,自己考虑啊
        //    if($this->somethingElseIsInvalid())
        //    {
        //        $validator->errors()->add('field','Something is wrong with this field');
        //    }
        //} );
        //
        ////最后这个 是必须要的, 要不然不会 把错误信息返回的+redirect()+withInput();
        //if ( $validator->fails() )
        //{
        //    return redirect( 'articles/create' )->withErrors( $validator )->withInput();
        //}
        dd( $request );
        Article::create( $request->all() );

        return redirect( route( 'articles' ) );
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
        $article = Article::findOrFail( $id );
        if ( view()->exists( 'articles.show' ) )
        {
            return view( 'articles.show', compact( 'article' ) );
        }

        return abort( 404 );

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
    {
        //展示要修改的表单
        $article = Article::findOrFail( $id );

        return view( 'articles.edit', compact( 'article' ) );

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update( CreateArticleRequest $request, $id )
    {
        $article = Article::findOrFail( $id );
        $article->update( $request->all() );

        return redirect( route( 'articles.show', $id ) );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
        //
    }
}
