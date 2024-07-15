<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Http\Requests\StorebooksRequest;
use App\Http\Requests\UpdatebooksRequest;
use App\Models\categories;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    const PATH_VIEW = "book.";
    public function index()
    {
        //
        $data = books::query()->latest('id')->paginate(10);
        // dd($data);
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = categories::query()->latest('id')->get();
        // dd($data);
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorebooksRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebooksRequest $request)
    {
        // dd($request);
        books::query()->create($request->all());
        return redirect()->route('book.index')->with('msg', "Thêm mới thành công");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\books  $books
     * @return \Illuminate\Http\Response
     */
    public function show(books $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\books  $books
     * @return \Illuminate\Http\Response
     */
    public function edit(books $book)
    {
        
        $data = categories::query()->latest('id')->get();
        // dd($books   );
        return view(self::PATH_VIEW . __FUNCTION__, compact('data','book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebooksRequest  $request
     * @param  \App\Models\books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebooksRequest $request, books $book)
    {
        $book->update($request->all());
        return redirect()->route('book.index')->with('msg', "Thêm mới thành công");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy(books $book)
    {
        $book->delete();
        return redirect()->route('book.index')->with('msg', "Xóa thành công");

    }
}
