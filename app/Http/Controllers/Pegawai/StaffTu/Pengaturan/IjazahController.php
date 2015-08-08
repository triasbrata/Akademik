<?php

namespace Akademik\Http\Controllers\Pegawai\StaffTu\Pengaturan;

use Illuminate\Http\Request;

use Akademik\Http\Requests\IjazahRequest;
use Akademik\Http\Controllers\Controller;
use Akademik\Ijazah;

class IjazahController extends Controller
{
    public function __construct()
    {
        parent::__construct('stafftu.pengaturan.ijazah', new Ijazah(),'Ijazah');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store( Ijazah $model, IjazahRequest $r)
    {
        if ($model->fill($r->all())->save()) {
            return $this->routeAndSuccess('store');
        }
        return $this->routeBackWithError('store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Ijazah $model, IjazahRequest $r)
    {
        if ($model->fill($r->all())->save()) {
            return $this->routeAndSuccess('store');
        }
        return $this->routeBackWithError('store');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Ijazah $model)
    {
        if ($model->delete()) {
            return $this->routeAndSuccess('destroy');
        }
        return $this->routeBackWithError('destroy');
    }
}
