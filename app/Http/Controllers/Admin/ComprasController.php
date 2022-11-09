<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Compra\BulkDestroyCompra;
use App\Http\Requests\Admin\Compra\DestroyCompra;
use App\Http\Requests\Admin\Compra\IndexCompra;
use App\Http\Requests\Admin\Compra\StoreCompra;
use App\Http\Requests\Admin\Compra\UpdateCompra;
use App\Models\Compra;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ComprasController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexCompra $request
     * @return array|Factory|View
     */
    public function index(IndexCompra $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Compra::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'orden_compra', 'servicio_solicitado', 'etapa_venta', 'tipo_servicio', 'fecha_solicitud', 'fecha_compromiso', 'monto'],

            // set columns to searchIn
            ['id', 'servicio_solicitado', 'etapa_venta', 'tipo_servicio']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.compra.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.compra.create');

        return view('admin.compra.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCompra $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreCompra $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Compra
        $compra = Compra::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/compras'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/compras');
    }

    /**
     * Display the specified resource.
     *
     * @param Compra $compra
     * @throws AuthorizationException
     * @return void
     */
    public function show(Compra $compra)
    {
        $this->authorize('admin.compra.show', $compra);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Compra $compra
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Compra $compra)
    {
        $this->authorize('admin.compra.edit', $compra);


        return view('admin.compra.edit', [
            'compra' => $compra,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCompra $request
     * @param Compra $compra
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateCompra $request, Compra $compra)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Compra
        $compra->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/compras'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/compras');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyCompra $request
     * @param Compra $compra
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyCompra $request, Compra $compra)
    {
        $compra->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyCompra $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyCompra $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Compra::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
