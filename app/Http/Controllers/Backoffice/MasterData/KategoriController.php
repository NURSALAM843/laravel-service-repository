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
    public function index()
    {

        $db = [
            'title' => 'Kategori',
            'data' =>  $this->kategoriService->getAll()
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
        DB::beginTransaction();
        try {
            $this->kategoriService->create($request);
            DB::commit();

            session()->flash('flash', [
                'message' => 'Data Berhasil Ditambah',
                'type' => 'success'
            ]);

            return redirect()->route('backoffice.master-data.kategori.index');
        } catch (Exception $e) {
            DB::rollBack();

            session()->flash('flash', [
                'message' => $e->getMessage(),
                'type' => 'danger'
            ]);
        }

        return redirect()->back()->withInput();
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
            'data' =>  $this->kategoriService->getById($kategori->id)
        ];
        return view('backoffice.kategori.edit', $db);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KategoriRequest $request, Kategori $kategori)
    {
        DB::beginTransaction();
        try {
            $this->kategoriService->update($kategori->id,$request);
            DB::commit();

            session()->flash('flash', [
                'message' => 'Data Berhasil Diubah',
                'type' => 'success'
            ]);

            return redirect()->route('backoffice.master-data.kategori.index');
        } catch (Exception $e) {
            DB::rollBack();

            session()->flash('flash', [
                'message' => $e->getMessage(),
                'type' => 'danger'
            ]);
        }

        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        DB::beginTransaction();
        try {
            $this->kategoriService->delete($kategori->id);
            DB::commit();

            session()->flash('flash', [
                'message' => 'Data Berhasil Dihapus',
                'type' => 'success'
            ]);

            return redirect()->route('backoffice.master-data.kategori.index');
        } catch (Exception $e) {
            DB::rollBack();

            session()->flash('flash', [
                'message' => $e->getMessage(),
                'type' => 'danger'
            ]);
        }

        return redirect()->back()->withInput();
    }
}
