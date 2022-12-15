<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class MainController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function python() {
        $process = new Process(['C:\Users\SERGEY\AppData\Local\Programs\Python\Python310\python.exe ', app_path() . '\Http\Controllers\Admin\python\out.py']);
        $process->run();

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        //dd($process->getOutput());

        return redirect()->route('admin.index');
    }
}
