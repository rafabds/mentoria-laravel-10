<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Produto;
use App\Models\User;
use App\Models\Venda;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalDeProdutoCadastrado = $this->buscaTotalProdutoCadastrado();
        $totalDeClienteCadastrado = $this->buscaTotalClienteCadastrado();
        $totalDeVendaCadastrada = $this->buscaTotalVendaCadastrada();
        $contagemUsuarios = $this->contagemUsuarios();

        return view('pages.dashboard.dashboard', compact('totalDeProdutoCadastrado', 'totalDeClienteCadastrado', 'totalDeVendaCadastrada', 'contagemUsuarios'));

    }

    public function buscaTotalProdutoCadastrado() {
        $findProduto = Produto::all()->count();
        return $findProduto;
    }

    public function buscaTotalClienteCadastrado() {
        $findCliente = Cliente::all()->count();
        return $findCliente;
    }

    public function buscaTotalVendaCadastrada() {
        $findVenda = Venda::all()->count();
        return $findVenda;
    }

    public function contagemUsuarios() {
        $find = User::all()->count();
        return $find;
    }
}
