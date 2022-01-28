<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Workspace;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Auth;

class WorkspaceController extends Controller
{
    public function show()
    {
        try {
            $workspace = Workspace::where('user_id', Auth::id())->with('tasks')->get();
            return response(view('workspace.view-list', [
                'workspaces' => $workspace,
            ]));
        } catch(Exception $error) {
            return response()->json([
                'message' => $error->getMessage()
            ]);
        }
    }

    public function ListTask($wid) {
        $tasks = Task::where('workspace_id', $wid)->get();
        return response(view('workspace.view-task', [
            'tasks' => $tasks,
            'now' => Carbon::now('Asia/Kuala_Lumpur'),
        ]));
    }
}
