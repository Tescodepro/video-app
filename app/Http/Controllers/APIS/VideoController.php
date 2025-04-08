<?php

namespace App\Http\Controllers\APIS;

use App\Http\Controllers\APIResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Video, Category};
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::with(['user', 'category'])->paginate(10);
        return APIResponse::success('Videos retrieved successfully', $videos);
    }

    public function show($id)
    {
        $video = Video::with(['user', 'category'])->findOrFail($id);
        return  APIResponse::success('Video retrieved successfully', $video);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        $video = Video::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'category_id' => $validated['category_id'],
            'user_id' => Auth::id(),
            'status' => 'pending',
        ]);

        return APIResponse::success('Video created successfully', $video);
    }

    public function update(Request $request, $id)
    {
        $video = Video::findOrFail($id);
        $validated = $request->validate([
            'title' => 'string',
            'description' => 'nullable|string',
            'category_id' => 'exists:categories,id',
            'status' => 'in:pending,processing,processed',
        ]);

        $video->update($validated);
        return APIResponse::success('Video updated successfully', $video);
    }
}
