<?php

namespace App\Http\Resources\NotaFiscal;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DeleteNotaFiscalRequestResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'status' => true,
            'message' => 'Nota Fiscal deletadas com sucesso!',
            'data' => [
                $this->resource
            ],
        ];
    }
}
