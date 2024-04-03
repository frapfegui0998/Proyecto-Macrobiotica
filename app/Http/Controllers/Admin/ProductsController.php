<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }



    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'description' => ['string', 'max:255'],
                'price' => ['required', 'numeric'],
                'image_url' => ['string', 'max:255'],
            ]
        );
        Products::create($request->post());
        return redirect()->route('admin.products.index')->with('success', 'Producto creado con éxito');
    }

    public function edit(Products $product)
    {
        $roles = Role::all();
        return view('admin.products.edit', compact('product', 'roles'));
    }

    public function update(Request $request, Products $product)
    {
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        $product->update($validated);

        return to_route('admin.products.index')->with('message', 'Product Updated successfully.');
    }

    /*public function Update(Request $request, Products $product){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'email', 'max:255', 'unique:' . Products::class],
            'price' => ['required', 'string', 'min:3'],
        ]);
    $product->update($request->all());

    return redirect()->route('admin.products.index')->with('success', 'Product has been updated successfully');
  }*/

    public function destroy(Products $product)
    {
        $product->delete();

        return back()->with('message', 'Product deleted.');
    }/*

    public function assignRole(Request $request, Permission $permission)
    {
        if ($permission->hasRole($request->role)) {
            return back()->with('message', 'El Rol ya existe.');
        }
        $permission->assignRole($request->role);
        return back()->with('message', 'Rol Asignado.');
    }

    public function removeRole(Permission $permission, Role $role)
    {
        if ($permission->hasRole($role)) {
            $permission->removeRole($role);
            return back()->with('message', 'Rol removido.');
        }
        return back()->with('message', 'Este Rol no está asignado.');
    }*/
}
