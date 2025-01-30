<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Employer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{

    protected $fillable = ['title', 'description', 'location', 'salary', 'position', 'url', 'is_featured'];


    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;
    //Relationships
    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function tag(string $name): void
    {
        $tag = Tag::firstOrCreate(['name' => $name]);
    $this->tags()->syncWithoutDetaching([$tag->id]);
    }
}
