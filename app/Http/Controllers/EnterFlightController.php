<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnterFlightRequest;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

class EnterFlightController extends Controller
{
    /**
     * Enter User Flights Data
     *
     * @param EnterFlightRequest $request
     * @return Response
     */
    public function enter(EnterFlightRequest $request): Response
    {
        $validated = $request->validated();
        $mapped = $this->mapFlights($validated['flights']);
        $user = User::query()->firstOrCreate(['passport_no' => $validated['passport_no']]);
        $user->flights()->createMany($mapped);

        return new Response('Inserted Successfully');
    }

    private function mapFlights(array $flights): array
    {
        return array_map(function ($flight) {
            return [
                'origin' => $flight[0],
                'destination' => $flight[1],
            ];
        }, $flights);
    }
}
