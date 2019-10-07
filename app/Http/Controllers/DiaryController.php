<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diary;
use Auth;

class DiaryController extends Controller
{
    private $diary;

    public function __construct(Diary $instanceClass)
    {
        $this->middleware('auth');
        $this->diary = $instanceClass;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchMonth = $request->input('search-month');
        $diaries = $this->diary->getDiaryList(Auth::id(), $searchMonth);
        return view('diary.index', compact('diaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diary.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::id();
        $this->diary->fill($input)->save();
        return redirect()->route('diary.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diaries = $this->diary->find($id);
        return view('diary.show', compact('diaries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diary = $this->diary->find($id);
        return view('diary.edit', compact('diary'));
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
        $input = $request->all();
        $this->diary->find($id)->fill($input)->save();
        return redirect()->route('diary.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->diary->find($id)->delete();
        return redirect()->route('diary.index');
    }
}
