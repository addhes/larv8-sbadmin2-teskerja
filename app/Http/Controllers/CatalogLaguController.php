<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\CatalogLagu;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;

class CatalogLaguController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = CatalogLagu::select('id', 'no', 'title', 'updated_at', 'status')->get();
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('updated_at', function($data) {
                    return $data->updated_at->diffForHumans();
                })
                ->addColumn('status', function($data) {
                    if ($data->status == 'Pending') {
                        return '<span class="badge badge-warning">'.$data->status.'</span>';
                    } elseif($data->status == 'Diterima') {
                        return '<span class="badge badge-success">'.$data->status.'</span>';
                    } else {
                        return '<span class="badge badge-danger">'.$data->status.'</span>';
                    }
                })
                ->addColumn('action', function($data){
                    if( Auth::user()->roles == 'admin'){
                        $btn = '<a href="'.route('catlog.edit', $data->id).'" class="btn btn-primary"><i class="fa fa-wrench mt-1"></i></a>';
                        return $btn;
                    } else {
                        $btn = '<a href="'.route('catlog.edit', $data->id).'" class="btn btn-warning"><i class="fa fa-wrench mt-1"></i></a>';
                        $btn .= '<a href="'.$data->id.'" class="btn btn-danger ml-2"><i class="fa fa-trash mt-1"></i></a>';
                        return $btn;
                    }
                })
                ->rawColumns(['action', 'updated_at', 'status',])
                ->make(true);
        }

        return view('admin.catalog_lagu.index',);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $tmbh = 
        $colgu = CatalogLagu::all()->count() +1;
        return view('admin.catalog_lagu.form', compact('colgu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $file_cover =  $request->file('cover_atwork')->getClientOriginalName();
        $image_path = $request->file('cover_atwork')->move('cover', $file_cover);
        if($request->lyric_url){
            $file_doc =  $request->file('lyric_url')->getClientOriginalName();
            $doc_path = $request->file('lyric_url')->move('doc', $file_doc);
        } else {
            $doc_path = '';
        }
        // dd($image_path);

        CatalogLagu::create([
            'cover_atwork' => $image_path,
            'no' => $request->no,
            'title' => $request->title,
            'artis_name' => $request->artis_name,
            'genre' => $request->genre,
            'sub_genre' => $request->sub_genre,
            'record_label' => $request->record_label,
            'produced_by' => $request->produced_by,
            'production_year' => $request->production_year,
            'first_release_date' => $request->first_release_date,
            'release_date' => $request->release_date,
            'lyric_language' => $request->lyric_language,
            'lyric_url' => $doc_path,
            'description' => $request->description
        ]);

        return redirect()
            ->route('catlog.index')
            ->with('success','Permohonan anggota telah dikirim');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CatalogLagu  $catalogLagu
     * @return \Illuminate\Http\Response
     */
    public function show(CatalogLagu $catalogLagu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CatalogLagu  $catalogLagu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catlog = CatalogLagu::find($id);
        return view('admin.catalog_lagu.edit', compact('catlog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CatalogLagu  $catalogLagu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CatalogLagu $catalogLagu)
    {

        $input = $request->all();

        if($cover = $request->file('cover_atwork')){
            $file_doc =  $request->file('cover_atwork')->getClientOriginalName();
            $cover->move('cover', $file_doc);
            $input['cover_atwork'] = $file_doc;
        } else {
            unset($input['cover_atwork']);
        }

        if($doc = $request->file('cover_atwork')){
            $file_doc =  $request->file('lyric_url')->getClientOriginalName();
            $doc->move('doc', $file_doc);
            $input['lyric_url'] = $file_doc;
        } else {
            unset($input['lyric_url']);
        }

        $catalogLagu->update($input);

        return redirect()
            ->route('catlog.index')
            ->with('success','Permohonan anggota telah dikirim');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatalogLagu  $catalogLagu
     * @return \Illuminate\Http\Response
     */
    public function destroy(CatalogLagu $catalogLagu)
    {
        //
    }
}
