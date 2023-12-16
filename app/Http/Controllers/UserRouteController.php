<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRouteRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserRouteController extends Controller
{
    /**
     * Get User Flight Route (First Origin, Last Destination)
     *
     * @param UserRouteRequest $request
     * @return JsonResponse
     */
    public function get(UserRouteRequest $request): JsonResponse
    {
        $user = User::where('passport_no', $request->passport_no)->firstOrFail();
        $firstFlight = $user->flights()->orderBy('created_at', 'ASC')->orderBy('id', 'ASC')->first();
        $lastFlight = $user->flights()->orderBy('created_at', 'DESC')->orderBy('id', 'DESC')->first();

        return response()->json([
            'first_origin' => $firstFlight->origin,
            'last_destination' => $lastFlight->destination
        ]);
    }
}
