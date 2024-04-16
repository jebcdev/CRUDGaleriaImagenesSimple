<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth'); // Esto protege todas las acciones del controlador
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::query()
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user_id = auth()->user()->id;

        $product = new Product();

        return view('admin.products.create', compact('user_id', 'product'));
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(StoreProductRequest $request)
    {
        $validatedData = $request->validated();



        // Obtener el archivo de imagen enviado en la solicitud
        $image = $request->file('image');

        // Generar un nombre aleatorio para la imagen
        $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();

        // Guardar la imagen en la carpeta "images" dentro de "storage/app/public" con el nombre aleatorio
        $imagePath = $image->storeAs('images', $imageName, 'public');

        // Crear el producto con los datos validados y la ruta de la imagen


        $product = [
            'user_id' => $validatedData['user_id'],
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
            'image' => $imagePath,
        ];



        Product::create($product);

        return redirect()->route('admin.products.index')->with('message', __('Product Created Successfully'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $user_id = auth()->user()->id;


        return view('admin.products.edit', compact('user_id', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */


    public function update(UpdateProductRequest $request, Product $product)
    {
        $validatedData = $request->validated();

        // Comprobar si se ha enviado una nueva imagen
        if ($request->hasFile('image')) {
            // Obtener el archivo de imagen enviado en la solicitud
            $image = $request->file('image');

            // Generar un nombre aleatorio para la nueva imagen
            $newImageName = Str::random(20) . '.' . $image->getClientOriginalExtension();

            // Guardar la nueva imagen en la carpeta "images" dentro de "storage/app/public" con el nombre aleatorio
            $newImagePath = $image->storeAs('images', $newImageName, 'public');

            // Borrar la imagen anterior si existe
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }

            // Actualizar los datos del producto, incluyendo la nueva imagen
            $product->update([
                'user_id' => $validatedData['user_id'],
                'name' => $validatedData['name'],
                'description' => $validatedData['description'],
                'price' => $validatedData['price'],
                'image' => $newImagePath,
            ]);
        } else {
            // Si no se ha enviado una nueva imagen, actualizar los demás datos del producto sin cambiar la imagen
            $product->update([
                'user_id' => $validatedData['user_id'],
                'name' => $validatedData['name'],
                'description' => $validatedData['description'],
                'price' => $validatedData['price'],
            ]);
        }

        return redirect()->route('admin.products.index')->with('message', __('Product Updated Successfully'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // Verificar si existe una imagen asociada al producto y eliminarla
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        // Eliminar el producto de la base de datos
        $product->delete();

        return redirect()->route('admin.products.index')->with('message', __('Product Deleted Successfully'));
    }
}
