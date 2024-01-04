<?php

namespace App\Http\Controllers\Backoffice\MasterData;

use App\Http\Requests\Backoffice\KategoriRequest;
use App\Models\Kategori;
use App\Services\Kategori\KategoriService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Exception;

class KategoriController extends Controller
{
    public function __construct(KategoriService $kategoriService){
        $this->kategoriService = $kategoriService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = $this->kategoriService->getAll($request);
        // dd(collect($data));
        $db = [
            'title' => 'Kategori',
            'data' =>  $data
        ];
        return view('backoffice.kategori.index', $db);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $db = [
            'title' => 'Tambah Kategori'
        ];
        return view('backoffice.kategori.create', $db);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KategoriRequest $request)
    {
        $result = $this->kategoriService->createBinding($request);

        if ($result['success']) {
            session()->flash('flash', [
                'message' => $result['message'],
                'type' => $result['type'],
            ]);

            return redirect()->route('backoffice.master-data.kategori.index');
        } else {
            session()->flash('flash', [
                'message' => $result['message'],
                'type' => $result['type'],
            ]);

            return redirect()->back()->withInput();
        }
     
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        $db = [
            'title' => 'Ubah Data',
            'data' =>  $this->kategoriService->getById($kategori)
        ];
        return view('backoffice.kategori.edit', $db);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KategoriRequest $request, Kategori $kategori)
    {
        $result = $this->kategoriService->updateBinding($kategori,$request);

        if ($result['success']) {
            session()->flash('flash', [
                'message' => $result['message'],
                'type' => $result['type'],
            ]);

            return redirect()->route('backoffice.master-data.kategori.index');
        } else {
            session()->flash('flash', [
                'message' => $result['message'],
                'type' => $result['type'],
            ]);

            return redirect()->back()->withInput();
        }
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        $result = $this->kategoriService->deleteBinding($kategori);

        if ($result['success']) {
            session()->flash('flash', [
                'message' => $result['message'],
                'type' => $result['type'],
            ]);

            return redirect()->route('backoffice.master-data.kategori.index');
        } else {
            session()->flash('flash', [
                'message' => $result['message'],
                'type' => $result['type'],
            ]);

            return redirect()->back()->withInput();
        }
       
    }
}
