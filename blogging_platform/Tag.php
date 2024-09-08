public function posts() {
    return $this->belongsToMany(Post::class);
}
