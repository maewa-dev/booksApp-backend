<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Authors;

class BooksResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'isbn' => $this->isbn,
            'num_page' => $this->num_page,
            'publish_date' => $this->publish_date,
            'image' => $this->image,
            'sypnosis' => $this->sypnosis,
            'review' => $this->review,
            'qualification' => $this->qualification,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'format_type' => $this->format_type,
            'notes' => $this->notes,
            'collection' => $this->collection,
            'volume' => $this->volume,
            'author' =>  $this->_authorFulName(),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }

    private function _authorFulName() {

        $author = new AuthorsResource(Authors::findOrFail($this->author_id));
        return $author->name . ' ' . $author->lastname;
    }
}

