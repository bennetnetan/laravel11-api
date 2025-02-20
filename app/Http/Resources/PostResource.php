<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    // Define properties
    public $status;
    public $message;
    public $resource;

    /**
     * __construct
     *
     * @param Request $request
     * @return array
     */
    public function __construct($status, $message   = 'Success', $resource)
    {
        parent::__construct($resource);
        $this->status = $status;
        $this->message = $message;
    }
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return
        [
            'status' => $this->status,
            'message' => $this->message,
            'data' => $this->resource
        ];
    }
}