<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Contacto\BulkDestroyContacto;
use App\Http\Requests\Admin\Contacto\DestroyContacto;
use App\Http\Requests\Admin\Contacto\IndexContacto;
use App\Http\Requests\Admin\Contacto\StoreContacto;
use App\Http\Requests\Admin\Contacto\UpdateContacto;
use App\Models\Contacto;
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

class ContactosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexContacto $request
     * @return array|Factory|View
     */
    public function index(IndexContacto $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Contacto::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'nombre', 'empresa', 'correo', 'telefono', 'direccion', 'codigo_postal', 'orden_compra'],

            // set columns to searchIn
            ['id', 'nombre', 'empresa', 'correo', 'telefono', 'direccion']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.contacto.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.contacto.create');

        return view('admin.contacto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreContacto $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreContacto $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Contacto
        $contacto = Contacto::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/contactos'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/contactos');
    }

    /**
     * Display the specified resource.
     *
     * @param Contacto $contacto
     * @throws AuthorizationException
     * @return void
     */
    public function show(Contacto $contacto)
    {
        $this->authorize('admin.contacto.show', $contacto);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Contacto $contacto
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Contacto $contacto)
    {
        $this->authorize('admin.contacto.edit', $contacto);


        return view('admin.contacto.edit', [
            'contacto' => $contacto,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateContacto $request
     * @param Contacto $contacto
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateContacto $request, Contacto $contacto)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Contacto
        $contacto->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/contactos'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/contactos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyContacto $request
     * @param Contacto $contacto
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyContacto $request, Contacto $contacto)
    {
        $contacto->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyContacto $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyContacto $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Contacto::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
