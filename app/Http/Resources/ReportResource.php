<?php

namespace App\Http\Resources;
use App\Models\User;
use App\Models\Team;

use Illuminate\Http\Resources\Json\JsonResource;

class ReportResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
        "Id" => $this->id,
        "User" => User::find($this->user_id)->value('name'),
        "Contact" => $this->contact,
        "Disposition" => $this->disposition,
        "Failed Mandate" => $this->failedMandate
        ];
    }
}
