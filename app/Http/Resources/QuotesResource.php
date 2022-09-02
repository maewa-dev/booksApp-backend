<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Books;
use App\Models\Authors;

class QuotesResource extends JsonResource
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
            'book' => $this->_bookTitle(),
            'quote' => $this->quote,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }

    private function _bookTitle(){
        
        $book = new BooksResource(Books::findOrFail($this->book_id));
        return $book->title;
    }
}
