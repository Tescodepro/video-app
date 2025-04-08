<?php

namespace App\Http\Controllers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class APIResponse extends Controller
{
    /**
     * Return success response
     */
    public static function success(string $message = 'Success', $data = null, int $statusCode = 200): JsonResponse
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data,
        ], $statusCode);
    }

    /**
     * Return error response
     */
    public static function error(string $message = 'Error', $errors = null, int $statusCode = 400): JsonResponse
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'errors' => $errors,
        ], $statusCode);
    }

    /**
     * Return 404 Error response
     */
    public static function notFound(string $message = 'Resource not found'): JsonResponse
    {
        return response()->json([
            'status' => false,
            'message' => $message,
        ], 404);
    }

    /**
     * Return unauthenticated error
     */
    public static function unauthenticated(string $message = 'You are not authenticated'): JsonResponse
    {
        return response()->json([
            'status' => false,
            'message' => $message,
        ], 401);
    }

    /**
     * Return authorization error
     */
    public static function unauthorized(string $message = 'You are not allowed to access this resource'): JsonResponse
    {
        return response()->json([
            'status' => false,
            'message' => $message,
        ], 403);
    }

    /**
     * Return validation error response
     */
    public static function validationError(array $errors, string $message = 'Validation failed'): JsonResponse
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'errors' => $errors,
        ], 422);
    }

    /**
     * Indicates a server error
     */
    public static function serverError(string $message = 'A server error occurred'): JsonResponse
    {
        return response()->json([
            'status' => false,
            'message' => $message,
        ], 500);
    }

    /**
     * Custom response for any status code
     */
    public static function customResponse(string $message, $data = null, int $statusCode): JsonResponse
    {
        return response()->json([
            'status' => $statusCode >= 200 && $statusCode < 300, // True for 2xx codes, false otherwise
            'message' => $message,
            'data' => $data,
        ], $statusCode);
    }                                     


}
