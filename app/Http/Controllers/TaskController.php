<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    // Tüm görevleri listeleme
    public function index()
    {
        $tasks = Auth::user()->tasks;
        return view('tasks.index', compact('tasks'));
    }

    // Yeni görev oluşturma formu
    public function create()
    {
        return view('tasks.create');
    }

    // Yeni görev kaydetme
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        Auth::user()->tasks()->create($request->all());

        return redirect()->route('tasks.index')->with('success', 'Görev başarıyla oluşturuldu.');
    }

    // Görev düzenleme formu
    public function edit(Task $task)
    {
        $this->authorize('update', $task); // 'view' yerine 'update' kullanılmalı
        return view('tasks.edit', compact('task'));
    }

    // Görevi güncelleme
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $this->authorize('update', $task);
        $task->update($request->all());

        return redirect()->route('tasks.index')->with('success', 'Görev başarıyla güncellendi.');
    }

    public function complete(Task $task)
    {
        $task->status = 'completed';
        $task->save();
    
        return redirect()->route('tasks.index')->with('success', 'Görev tamamlandı!');
    }
    
    public function destroy(Task $task)
    {
        $task->delete();
    
        return redirect()->route('tasks.index')->with('success', 'Görev silindi!');
    }
}
