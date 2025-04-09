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
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'video_path' => 'required|url',
            'visibility' => 'nullable|in:public,private',
            'thumbnail' => 'required|url',
            'tags' => 'nullable|string',
            'duration' => 'required|string',
            'resolution' => 'required|string',
        ]);

        $video = Video::create([
            'title' => $validated['title'],
            'description' => $validated['description'] ?? null,
            'category_id' => $validated['category_id'],
            'user_id' => Auth::id(),
            'video_path' => $validated['video_path'] ?? null,
            'visibility' => $validated['visibility'] ?? 'public',
            'thumbnail' => $validated['thumbnail'] ?? null,
            'tags' => $validated['tags'] ?? null,
            'duration' => $validated['duration'] ?? null,
            'resolution' => $validated['resolution'] ?? null,
            'status' => 'pending',
        ]);

        return APIResponse::success('Video created successfully', $video);
    }

    public function update(Request $request, $id)
    {
        $video = Video::findOrFail($id);

        $validated = $request->validate([
            'title' => 'sometimes|required|string',
            'description' => 'nullable|string',
            'category_id' => 'sometimes|exists:categories,id',
            'status' => 'sometimes|in:pending,processing,processed',
            'video_path' => 'nullable|url',
            'visibility' => 'nullable|in:public,private',
            'thumbnail' => 'nullable|url',
            'tags' => 'nullable|string',
            'duration' => 'nullable|string',
            'resolution' => 'nullable|string',
        ]);

        $video->update($validated);

        return APIResponse::success('Video updated successfully', $video);
    }
}
