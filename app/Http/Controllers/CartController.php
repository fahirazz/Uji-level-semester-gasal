<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Menampilkan semua item di keranjang
    public function index()
    {
        $cartItems = Cart::with('menu')
            ->where('user_id', auth()->id())
            ->get();

        return view('cart.index', compact('cartItems'));
    }

    // Fungsi untuk menambahkan item ke keranjang
    public function addToCart(Request $request, $menuId)
    {
        // Periksa apakah menu ada di database
        $menu = Menu::findOrFail($menuId);  // Tidak perlu pengecekan lagi jika sudah menggunakan findOrFail

        // Cek apakah user sudah login
        $userId = Auth::id();
        if (!$userId) {
            return redirect()->route('login')->with('error', 'You need to login first.');
        }

        // Cek apakah menu sudah ada di keranjang
        $cartItem = Cart::where('user_id', $userId)
                        ->where('menu_id', $menuId)
                        ->first();

        if ($cartItem) {
            // Jika item sudah ada, update quantity
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            // Jika belum ada, tambahkan item baru ke keranjang
            Cart::create([
                'user_id' => $userId,
                'menu_id' => $menuId,
                'quantity' => 1,
            ]);
        }

        return redirect()->route('cart.index')->with('success', 'Item added to cart.');
    }

    // Fungsi untuk update quantity keranjang
    public function updateQuantity(Request $request, $cartId)
    {
        $cartItem = Cart::findOrFail($cartId);

        // Pastikan user yang mengubah adalah pemilik keranjang
        if ($cartItem->user_id !== Auth::id()) {
            return redirect()->route('cart.index')->with('error', 'Unauthorized action.');
        }

        // Validasi input kuantitas
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        // Update kuantitas
        $cartItem->quantity = $request->quantity;
        $cartItem->save();

        return redirect()->route('cart.index')->with('success', 'Cart updated successfully.');
    }

    // Fungsi untuk menghapus item dari keranjang
    public function delete($cartId)
    {
        $cartItem = Cart::findOrFail($cartId);

        // Pastikan user yang menghapus adalah pemilik keranjang
        if ($cartItem->user_id !== Auth::id()) {
            return redirect()->route('cart.index')->with('error', 'Unauthorized action.');
        }

        // Hapus item dari keranjang
        $cartItem->delete();

        return redirect()->route('cart.index')->with('success', 'Item removed from cart.');
    }
}
