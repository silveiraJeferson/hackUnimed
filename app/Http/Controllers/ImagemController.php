<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class ImagemController extends Controller
{
    function getImagemFile($nome) {
        $imagem = Storage::disk('publico')->get($nome);
        return response($imagem,200)->header('Content-Type', 'image/jpeg');
    }
}