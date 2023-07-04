<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    /**
     * @OA\Tag(
     *     name="welcome",
     *     description="Everything about tests",
     *
     *     @OA\ExternalDocumentation(
     *         description="Find out more",
     *         url="https://swagger.io"
     *     )
     * )
     *
     * @OA\Get(
     *      path="/api/welcome",
     *      tags={"welcome"},
     *      summary="Get welcome message",
     *
     *      @OA\Response(response="200", description="Displays a welcome message")
     * )
     */
    public function index()
    {
        return 'Welcome to Inzidi API';
    }
}
