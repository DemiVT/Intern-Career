public function tags() {
    return $this->belongsToMany(Tag::class);
}

public function category() {
    return $this->belongsTo(Category::class);
}
public function comments() {
    return $this->hasMany(Comment::class);
}
