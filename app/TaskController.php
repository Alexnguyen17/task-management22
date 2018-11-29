<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskController extends Model
{
    public function index()
    {
        //Lấy ra toàn bộ các task từ database thông qua truy vấn bằng Eloquent
        $tasks = \App\Task::all();

        // Trả về view index và truyền biến tasks chứa danh sách các task
        return view('index', compact('tasks'));
    }
}
