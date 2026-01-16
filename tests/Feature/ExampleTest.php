<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     * 
     * Verifica que la aplicación responde correctamente.
     * Usa el endpoint de API en lugar de rutas web para evitar dependencia de Vite.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/api/health');

        $response->assertStatus(200);
    }
}
