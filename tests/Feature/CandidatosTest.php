<?php

namespace Tests\Feature;

use App\Models\Candidato;
use Database\Seeders\CandidatoSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\CreatesApplication;
use Tests\TestCase;

class CandidatosTest extends TestCase
{

    public function setUp(): void
    {
        parent::setUp();
    }

    public function tearDown(): void
    {
        $candidatos = Candidato::all();
        foreach ($candidatos as $candidato) {
            $candidato->delete();
        }
        parent::tearDown();
    }

    public function test_create_candidato()
    {
        $candidato = Candidato::create([
            'nome' => 'Candidato Teste',
            'email' => 'email@email.com',
            'telefone' => '999999999',
        ]);

        $this->assertNotNull($candidato->id);
    }
}
