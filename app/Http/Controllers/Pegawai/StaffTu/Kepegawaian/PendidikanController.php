<?php

namespace Akademik\Http\Controllers\Pegawai\StaffTu\kepegawaian;

use Illuminate\Http\Request;

use Akademik\Http\Requests\PegawaiPendidikanRequest;
use Akademik\Http\Controllers\Controller;
use Akademik\PegawaiPendidikan;

class PendidikanController extends Controller
{
     public function __construct()
    {
        parent::__construct('stafftu.kepegawaian.pendidikan', new PegawaiPendidikan(), 'Pendidikan');

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
    public function store(PegawaiPendidikan $model,PegawaiPendidikanRequest $r)
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
    public function update(PegawaiPendidikan $model,PegawaiPendidikanRequest $r)
    {
         if ($model->fill($r->all())->save()) {
            return $this->routeAndSuccess('update');
        }
        return $this->routeBackWithError('update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(PegawaiPendidikan $model)
    {
        if ($model->delete()) {
            return $this->routeAndSuccess('destroy');
        }
        return $this->routebackWithError('destroy');
    }
}
